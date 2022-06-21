<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Filemanager\Entities\Files;

class StatisticItem extends Model
{
    protected $table = 'statistic_item';
    protected $with =['file'];

    protected $fillable = ['created_at', 'deleted_at', 'description', 'file_id', 'parent_id', 'secondary', 'sort', 'status', 'title', 'updated_at',];

    public static function rules()
    {
        return [
            'created_at' => 'datetime|nullable',
            'deleted_at' => 'datetime|nullable',
            'description' => 'string|nullable',
            'file_id' => 'integer|nullable',
            'parent_id' => 'integer|nullable',
            'secondary' => 'string|nullable',
            'sort' => 'integer|nullable',
            'status' => 'integer|nullable',
            'title' => 'string|nullable',
            'updated_at' => 'datetime|nullable',

        ];
    }

    public function file(): BelongsTo
    {
        return $this->belongsTo(Files::class);
    }
}
