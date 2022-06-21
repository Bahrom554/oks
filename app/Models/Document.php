<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Filemanager\Entities\Files;

class Document extends Model
{
    protected $table = 'documents';
    protected $with =['file'];

    protected $fillable = ['created_at', 'deleted_at', 'description', 'file_id', 'lang', 'lang_hash', 'sort', 'status', 'title', 'type', 'updated_at', ];

    public static function rules()
    {
        return [
            'created_at' => 'datetime|nullable',
'deleted_at' => 'datetime|nullable',
'description' => 'string|nullable',
'file_id' => 'integer|nullable',
'lang' => 'integer|nullable',
'lang_hash' => 'string|nullable',
'sort' => 'integer|nullable',
'status' => 'integer|nullable',
'title' => 'string|nullable',
'type' => 'integer|nullable',
'updated_at' => 'datetime|nullable',

        ];
    }
    public function file(): BelongsTo
    {
        return $this->belongsTo(Files::class);
    }
}
