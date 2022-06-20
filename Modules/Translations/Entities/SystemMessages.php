<?php

namespace Modules\Translations\Entities;

use Illuminate\Database\Eloquent\Model;

class SystemMessages extends Model
{
    protected $table = '_system_message';

    protected $fillable = ['category', 'message'];

}
