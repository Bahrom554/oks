<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Modules\Filemanager\Entities\Files;

class Page extends Model
{
    use Translatable;

    protected $table = 'page';

    protected $fillable = ['title', 'slug', 'description', 'type', 'file_id', 'documents', 'anons', 'content', 'created_at', 'updated_at', 'lang', 'lang_hash', 'status', 'deleted_at',];

    protected $with = ['file'];

    public static function rules()
    {
        return [
            'title' => 'string|required',
            'slug' => 'string|nullable',
            'description' => 'string|nullable',
            'type' => 'integer|nullable',
            'file_id' => 'integer|nullable',
            'documents' => 'string|nullable',
            'anons' => 'string|nullable',
            'content' => 'string|nullable',
            'created_at' => 'datetime|nullable',
            'updated_at' => 'datetime|nullable',
            'lang' => 'integer|nullable',
            'lang_hash' => 'string|nullable',
            'status' => 'integer|nullable',
            'deleted_at' => 'datetime|nullable',
        ];
    }

    public function setTitleAttribute($value)
    {
        $this->setTranslation($value, 'title');
    }

    public function getTranslationsAttribute(): array
    {
        return $this->getTranslation('page');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = empty($value) ?
            Str::slug($this->attributes['title'])
            : str_replace(' ', '-', $value);
    }

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        self::created(function ($model){
            $model->slug .= $model->id;
            $model->save();
        });
    }

    public function file(): BelongsTo
    {
        return $this->belongsTo(Files::class);
    }
}
