<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Modules\Translations\Entities\Langs;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Post
 *
 */
class PostController extends ApiController
{
    public $modelClass = Post::class;

    /**
     * Post Get all
     *
     * @response {
     *  "id": "bigint",
     *  "title": "string",
     *  "description": "string",
     *  "content": "text",
     *  "slug": "string",
     *  "top": "integer",
     *  "popular": "integer",
     *  "type": "integer",
     *  "file_id": "integer",
     *  "documents": "string",
     *  "video": "string",
     *  "photo_author": "string",
     *  "published_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     *  "lang": "integer",
     *  "lang_hash": "string",
     *  "status": "integer",
     *  "deleted_at": "datetime",
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
        $query->where(['lang' => Langs::getLangId(Lang::getLocale())]);
        $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);

        $query->when($request->has('tag'), function ($post) use ($request) {
            $post->whereHas('tags', function ($q) use ($request) {
                $q->whereName($request->tag);
            });
        });

        return $query->paginate($request->per_page);
    }

    /**
     * Post view
     *
     * @queryParam id required ID
     * @var $id
     * @response {
     *  "id": "bigint",
     *  "title": "string",
     *  "description": "string",
     *  "content": "text",
     *  "slug": "string",
     *  "top": "integer",
     *  "popular": "integer",
     *  "type": "integer",
     *  "file_id": "integer",
     *  "documents": "string",
     *  "video": "string",
     *  "photo_author": "string",
     *  "published_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     *  "lang": "integer",
     *  "lang_hash": "string",
     *  "status": "integer",
     *  "deleted_at": "datetime",
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
     * Post create
     *
     * @bodyParam id bigint no-required id
     * @bodyParam title string no-required title
     * @bodyParam description string no-required description
     * @bodyParam content text no-required content
     * @bodyParam slug string no-required slug
     * @bodyParam top integer no-required top
     * @bodyParam popular integer no-required popular
     * @bodyParam type integer no-required type
     * @bodyParam file_id integer no-required file_id
     * @bodyParam documents string no-required documents
     * @bodyParam video string no-required video
     * @bodyParam photo_author string no-required photo_author
     * @bodyParam published_at datetime no-required published_at
     * @bodyParam created_at datetime no-required created_at
     * @bodyParam updated_at datetime no-required updated_at
     * @bodyParam lang integer no-required lang
     * @bodyParam lang_hash string no-required lang_hash
     * @bodyParam status integer no-required status
     * @bodyParam deleted_at datetime no-required deleted_at
     *
     * @var Request $request
     */
    public function create(Request $request)
    {

        $request->validate($this->modelClass::rules());
        $model = $this->modelClass::create($request->all());

        if (is_array($request->tags)) {
            foreach ($request->tags as $tag) {
                DB::table('tag_post')->insert([
                    'tag_id' => $tag,
                    'post_id' => $model->id,
                ]);
            }
        }

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * Post update
     *
     * @queryParam id required ID
     * @bodyParam id bigint no-required id
     * @bodyParam title string no-required title
     * @bodyParam description string no-required description
     * @bodyParam content text no-required content
     * @bodyParam slug string no-required slug
     * @bodyParam top integer no-required top
     * @bodyParam popular integer no-required popular
     * @bodyParam type integer no-required type
     * @bodyParam file_id integer no-required file_id
     * @bodyParam documents string no-required documents
     * @bodyParam video string no-required video
     * @bodyParam photo_author string no-required photo_author
     * @bodyParam published_at datetime no-required published_at
     * @bodyParam created_at datetime no-required created_at
     * @bodyParam updated_at datetime no-required updated_at
     * @bodyParam lang integer no-required lang
     * @bodyParam lang_hash string no-required lang_hash
     * @bodyParam status integer no-required status
     * @bodyParam deleted_at datetime no-required deleted_at
     *
     * @var $id
     * @var Request $request
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->modelClass::rules());

        $model = $this->modelClass::findOrFail($id);
        $model->update($request->all());

        if (is_array($request->tags)) {
            DB::table('tag_post')
                ->where(['post_id' => $model->id])
                ->delete();
            foreach ($request->tags as $tag) {
                DB::table('tag_post')
                    ->insert([
                        'tag_id' => $tag,
                        'post_id' => $model->id,
                    ]);
            }
        }

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * Post delete
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

    /**
     * @param Request $request
     * @param $slug
     * @return mixed
     */
    public function slug(Request $request, $slug)
    {
        return Post::where([
            'lang' => Langs::getLangId(Lang::getLocale()),
            'slug' => $slug,
        ])->first();
    }
}
