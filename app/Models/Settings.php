<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Modules\Filemanager\Entities\Files;

class Settings extends Model
{
    use Translatable;

    protected $table = 'settings';

    protected $fillable = ['id', 'name', 'value', 'file_id', 'slug', 'link', 'alias', 'lang_hash', 'sort', 'lang', 'status', 'deleted_at', 'created_at', 'updated_at'];

    protected $with = ['file'];

    public static function rules()
    {
        return [
            'name' => 'string|required',
            'slug' => 'string|nullable',
            'value' => 'string|nullable',
            'file_id' => 'integer|nullable',
            'link' => 'string|nullable',
            'alias' => 'string|nullable',
            'lang_hash' => 'string|nullable',
            'sort' => 'integer|nullable',
            'lang' => 'integer|nullable',
            'status' => 'integer|nullable',
            'deleted_at' => 'datetime|nullable',
            'created_at' => 'datetime|nullable',
            'updated_at' => 'datetime|nullable',

        ];
    }

    public function file(): BelongsTo
    {
        return $this->belongsTo(Files::class);
    }

    public function setNameAttribute($value)
    {
        $this->setTranslation($value, 'name');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = empty($value) ?
            Str::slug($this->attributes['name'])
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

    public function getTranslationsAttribute(): array
    {
        return $this->getTranslation('settings');
    }
}
