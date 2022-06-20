<?php


namespace Modules\Playmobile\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PhoneConfirmation extends Model
{
    use Notifiable;

    const STATUS_UNCONFIRMED = 0;
    const STATUS_CONFIRMED = 1;

    protected $table = 'phone_confirmation';

    protected $fillable = [
        'id', 'phone', 'code', 'status', 'created_at', 'updated_at'
    ];

}
