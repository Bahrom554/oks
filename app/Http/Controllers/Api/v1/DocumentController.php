<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Modules\Translations\Entities\Langs;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Document
 *
 */
class DocumentController extends ApiController
{
    public $modelClass = Document::class;

    /**
    * Document Get all
    *
    * @response {
    *  "created_at": "datetime",
*  "deleted_at": "datetime",
*  "description": "string",
*  "file_id": "integer",
*  "id": "bigint",
*  "lang": "integer",
*  "lang_hash": "string",
*  "sort": "integer",
*  "status": "integer",
*  "title": "string",
*  "type": "integer",
*  "updated_at": "datetime",

    * "roles": ["admin"]
    * }
    * @var Request $request
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
        $query->allowedFilters($filter);
        $query->where(['lang' => Langs::getLangId(Lang::getLocale())]);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
    * Document view
    *
    * @queryParam id required ID
    * @var $id
    * @response {
    *  "created_at": "datetime",
*  "deleted_at": "datetime",
*  "description": "string",
*  "file_id": "integer",
*  "id": "bigint",
*  "lang": "integer",
*  "lang_hash": "string",
*  "sort": "integer",
*  "status": "integer",
*  "title": "string",
*  "type": "integer",
*  "updated_at": "datetime",

    * "roles": ["all"]
    * }
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
     * Document create
     *
     * @bodyParam created_at datetime no-required created_at
* @bodyParam deleted_at datetime no-required deleted_at
* @bodyParam description string no-required description
* @bodyParam file_id integer no-required file_id
* @bodyParam id bigint no-required id
* @bodyParam lang integer no-required lang
* @bodyParam lang_hash string no-required lang_hash
* @bodyParam sort integer no-required sort
* @bodyParam status integer no-required status
* @bodyParam title string no-required title
* @bodyParam type integer no-required type
* @bodyParam updated_at datetime no-required updated_at

     *
     * @var Request $request
     */
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
     * Document update
     *
     * @queryParam id required ID
     * @bodyParam created_at datetime no-required created_at
* @bodyParam deleted_at datetime no-required deleted_at
* @bodyParam description string no-required description
* @bodyParam file_id integer no-required file_id
* @bodyParam id bigint no-required id
* @bodyParam lang integer no-required lang
* @bodyParam lang_hash string no-required lang_hash
* @bodyParam sort integer no-required sort
* @bodyParam status integer no-required status
* @bodyParam title string no-required title
* @bodyParam type integer no-required type
* @bodyParam updated_at datetime no-required updated_at

     *
     * @var $id
     * @var Request $request
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
     * Document delete
     *
     * @queryParam id required ID
     *
     * @var $id
     */
    public function destroy(int $id)
    {
        $model = $this->modelClass::findOrFail($id);
        $model->update(['is_deleted' => 1]);
        $model->delete();
        return response()->json('deleted', 204);
    }
}
