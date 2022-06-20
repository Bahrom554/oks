<?php

namespace App\Http\Repositories;

use App\Models\Products;
use Nwidart\Modules\Collection;
use Spatie\QueryBuilder\Exceptions\InvalidAppendQuery;
use Spatie\QueryBuilder\Exceptions\InvalidFieldQuery;
use Spatie\QueryBuilder\Exceptions\InvalidFilterQuery;
use Spatie\QueryBuilder\Exceptions\InvalidIncludeQuery;
use Spatie\QueryBuilder\Exceptions\InvalidSortQuery;
use Spatie\QueryBuilder\QueryBuilder;

class BaseRepository
{

    public $model;

    protected $query;

    public $with;

    public $filters;

    public $includes;

    public $sorts;

    public $fields;

    public $appends;

    public function get()
    {
        try {
            $this->query = QueryBuilder::for(Products::class);
            if ($this->filters) {
                $this->query->allowedFilters($this->filters);
            }
            if ($this->includes) {
                $this->query->allowedIncludes($this->includes);
            }
            if ($this->sorts) {
                $this->query->allowedSorts($this->sorts);
            }
            if ($this->fields) {
                $this->query->allowedFields($this->fields);
            }
            if ($this->appends) {
                $this->query->allowedAppends($this->appends);
            }
            return $this->query->get();
        } catch (InvalidFilterQuery $exception) {
            abort(400, 'Invalid Filters. Available: ' . $this->to_str($this->filters));
        } catch (InvalidIncludeQuery $exception) {
            abort(400, 'Invalid Includes. Available: ' . $this->to_str($this->includes));
        } catch (InvalidSortQuery $exception) {
            abort(400, 'Invalid Sorts. Available: ' . $this->to_str($this->sorts));
        } catch (InvalidFieldQuery $exception) {
            abort(400, 'Invalid Fields. Available: ' . $this->to_str($this->fields));
        } catch (InvalidAppendQuery $exception) {
            abort(400, 'Invalid Appends. Available: ' . $this->to_str($this->appends));
        }
    }


    private function to_str($args)
    {
        $res = '';
        if (is_array($args)) {
            foreach ($args as $arg)
                $res .= $arg . '|';
        }
        return $res;
    }

    public function filter($filters)
    {
        return QueryBuilder::for($this->model)->allowedFilters($filters);
    }

    public function include($includes)
    {
        return QueryBuilder::for($this->model)->allowedIncludes($includes);
    }

    public function sort($sorts)
    {
        return QueryBuilder::for($this->model)->allowedSorts($sorts);
    }

    public function select($fields)
    {
        return QueryBuilder::for($this->model)->allowedFields($fields);
    }

    public function paginate(Collection $collection, $number = null)
    {
        return $collection->paginate($number ? $number : config('settings.paginate.default'));
    }

    /**
     * Synchronization Many to many relations
     *
     * @param $request
     * @param $relation
     * @return bool
     */
    protected function syncRelation($request, $relation)
    {
        if (is_array($request)) {
            if (!empty($request)) {
                $this->model->$relation()->sync($request);
            } else {
                $this->model->$relation()->detach();
            }
        } else {
            if ($request->$relation) {
                $this->model->$relation()->sync($request->$relation);
            } else {
                $this->model->$relation()->detach();
            }
        }
        return true;
    }

    /**
     * @param $status
     * @param array $relations
     * @return mixed
     */
    protected function getByStatus($status, array $relations = array())
    {
        if (!empty($relations)) {
            return $this->model->where('status', $status)->with($relations)->paginate(config('settings.paginate.default'));
        }
        return $this->model->where('status', $status)->paginate(config('settings.paginate.default'));
    }

    /**
     * @param $model
     * @param $status
     * @return bool
     */
    public static function statusExists($model, $status)
    {
        return (key_exists($status, config('status.' . $model))) ? true : false;
    }
}
