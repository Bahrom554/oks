<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Filemanager\Entities\Files;

class Partner extends Model
{
    use Translatable;

    protected $table = 'partner';
    protected $with = ['file'];

    protected $fillable = ['link', 'sort', 'lang', 'lang_hash', 'status', 'file_id', 'deleted_at', 'created_at', 'updated_at',];

    public static function rules()
    {
        return [
            'link' => 'string|nullable',
            'sort' => 'integer|nullable',
            'lang' => 'integer|nullable',
            'lang_hash' => 'string|nullable',
            'status' => 'integer|nullable',
            'file_id' => 'integer|nullable',
            'deleted_at' => 'datetime|nullable',
            'created_at' => 'datetime|nullable',
            'updated_at' => 'datetime|nullable',

        ];
    }

    public function file(): BelongsTo
    {
        return $this->belongsTo(Files::class);
    }
}
