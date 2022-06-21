<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Filemanager\Entities\Files;

class Activity extends Model
{
    use Translatable;
    protected $table = 'activity';
    protected $with =['file'];

    protected $fillable = ['created_at', 'deleted_at', 'description', 'file_id', 'lang', 'lang_hash', 'link', 'sort', 'status', 'title', 'type', 'updated_at',];

    public static function rules()
    {
        return [
            'created_at' => 'datetime|nullable',
            'deleted_at' => 'datetime|nullable',
            'description' => 'string|nullable',
            'file_id' => 'integer|nullable',
            'lang' => 'integer|nullable',
            'lang_hash' => 'string|nullable',
            'link' => 'string|nullable',
            'sort' => 'integer|nullable',
            'status' => 'integer|nullable',
            'title' => 'string|nullable',
            'type' => 'integer|nullable',
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
