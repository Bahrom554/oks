<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Feedback
 *
 */
class FeedbackController extends ApiController
{
    public $modelClass = Feedback::class;

    /**
     * Feedback Get all
     *
     * @response {
     *  "id": "bigint",
     *  "name": "string",
     *  "phone": "string",
     *  "message": "text",
     *  "services": "text",
     *  "email": "string",
     *  "files": "string",
     *  "type": "integer",
     *  "address": "string",
     *  "status": "integer",
     *  "drink": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
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
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
     * Feedback view
     *
     * @queryParam id required ID
     * @var $id
     * @response {
     *  "id": "bigint",
     *  "name": "string",
     *  "phone": "string",
     *  "message": "text",
     *  "services": "text",
     *  "email": "string",
     *  "files": "string",
     *  "type": "integer",
     *  "address": "string",
     *  "status": "integer",
     *  "drink": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
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
     * Feedback create
     *
     * @bodyParam id bigint no-required id
     * @bodyParam name string no-required name
     * @bodyParam phone string no-required phone
     * @bodyParam message text no-required message
     * @bodyParam services text no-required services
     * @bodyParam email string no-required email
     * @bodyParam files string no-required files
     * @bodyParam type integer no-required type
     * @bodyParam address string no-required address
     * @bodyParam status integer no-required status
     * @bodyParam drink integer no-required drink
     * @bodyParam deleted_at datetime no-required deleted_at
     * @bodyParam created_at datetime no-required created_at
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
     * Feedback update
     *
     * @queryParam id required ID
     * @bodyParam id bigint no-required id
     * @bodyParam name string no-required name
     * @bodyParam phone string no-required phone
     * @bodyParam message text no-required message
     * @bodyParam services text no-required services
     * @bodyParam email string no-required email
     * @bodyParam files string no-required files
     * @bodyParam type integer no-required type
     * @bodyParam address string no-required address
     * @bodyParam status integer no-required status
     * @bodyParam drink integer no-required drink
     * @bodyParam deleted_at datetime no-required deleted_at
     * @bodyParam created_at datetime no-required created_at
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
     * Feedback delete
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
