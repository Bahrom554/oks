<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\MenuItems;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group MenuItems
 *
 */
class MenuItemsController extends ApiController
{
    public $modelClass = MenuItems::class;

    /**
     * MenuItems Get all
     *
     * @response {
     *  "id": "integer",
     *  "menu_id": "integer",
     *  "title": "string",
     *  "url": "string",
     *  "file_id": "integer",
     *  "sort": "integer",
     *  "menu_item_parent_id": "integer",
     *  "status": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["admin"],
     * "include": ["file,menuItems"]
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
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        $query->whereNull('menu_item_parent_id');
        return $query->paginate($request->per_page);
    }

    /**
    * MenuItems view
    *
    * @queryParam id required ID
    * @var $id
    * @response {
    
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
     * MenuItems create
     *
     
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
     * MenuItems update
     *
     * @queryParam id required ID
     
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
     * MenuItems delete
     *
     * @queryParam id required ID
     *
     * @var $id
     */
    public function destroy(int $id)
    {
        $model = $this->modelClass::findOrFail($id);
        $model->delete();
        return response()->json('deleted', 204);
    }

    /**
     * @param Request $request
     * @return bool|\Illuminate\Http\JsonResponse
     */
    public function sort(Request $request)
    {
        try {
            $data = $request->get('nestable');
            if ($data) {
                $array = $data;
                $this->recursion($array);
            }
        } catch(\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()]);
        }
        return true;
    }

    private function recursion($array, $parent_id = null)
    {
        if (count($array)) {
            $i = 1;
            foreach ($array as $arr) {
                $this->modelClass::where('id', $arr['id'])->update(['sort' => $i, 'menu_item_parent_id' => $parent_id]);
                if (isset($arr['menu_items'])) {
                    $this->recursion($arr['menu_items'], $arr['id']);
                }
                $i++;
            }
        }
    }
}
