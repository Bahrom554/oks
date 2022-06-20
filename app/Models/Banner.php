<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Filemanager\Entities\Files;

class Banner extends Model
{
    use Translatable;

    protected $table = 'banners';

    protected $with = ['file'];

    protected $fillable = ['title', 'description', 'link', 'type', 'sort', 'file_id', 'lang', 'lang_hash', 'status', 'created_at', 'updated_at',];

    public static function rules()
    {
        return [
            'title' => 'string|required',
            'description' => 'string|nullable',
            'link' => 'string|nullable',
            'type' => 'integer|nullable',
            'sort' => 'integer|nullable',
            'file_id' => 'integer|nullable',
            'lang' => 'integer|nullable',
            'lang_hash' => 'string|nullable',
            'status' => 'integer|nullable',
            'created_at' => 'datetime|nullable',
            'updated_at' => 'datetime|nullable',
        ];
    }

    public function setTitleAttribute($value)
    {
        $this->setTranslation($value, 'title');
    }

    public function getTranslationsAttribute(): array
    {
        return $this->getTranslation('banners');
    }

    public function file(): BelongsTo
    {
        return $this->belongsTo(Files::class);
    }
}
