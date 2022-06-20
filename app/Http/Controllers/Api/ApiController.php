<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Modules\Translations\Entities\Langs;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ApiController extends Controller
{
    public $modelClass;

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $filters = $request->get('filter');
        $filter = [];
        if (!empty($filters)) {
            foreach ($filters as $k => $item) {
                $filter[] = AllowedFilter::exact($k);
            }
        }

        $query = QueryBuilder::for($this->modelClass);
        if (isset($this->modelClass::rules()['lang'])) {
            $query->where(['lang' => Langs::getLangId(Lang::getLocale())]);
        }
        if (!empty($request->get('root'))) {
            $query->whereNull('parent_id');
        }
        if (!empty($request->get('title'))) {
            $query->where('title', 'ilike', '%'.$request->get('title').'%');
        }
        if (!empty($request->get('name'))) {
            $query->where('name', 'ilike', '%'.$request->get('name').'%');
        }
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedFilters($filter);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function show(Request $request, $id)
    {
        $model = $this->modelClass::findOrFail($id);
        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }
        return $model;
    }

    /**
     * @param Request $request
     * @param $slug
     * @return mixed
     */
    public function slug(Request $request, $slug)
    {
        $model = $this->modelClass::whereSlug($slug)
            ->when(isset($this->modelClass::rules()['lang']), function ($query) {
                $query->where(['lang' => Langs::getLangId(Lang::getLocale())]);
            })
            ->firstOrFail();

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }
        return $model;
    }

    public function create(Request $request)
    {
        $request->validate($this->modelClass::rules());
        $model = $this->modelClass::create($request->all());

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->modelClass::rules());

        $model = $this->modelClass::findOrFail($id);
        $model->update($request->all());

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy(int $id)
    {
        $model = $this->modelClass::findOrFail($id);
        $model->delete();
        return response()->json('deleted', 204);
    }
}
