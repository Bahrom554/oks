<?php


namespace Modules\Playmobile\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SendSms extends Model
{
    use Notifiable;

    protected $table = 'send_sms';

    protected $fillable = [
        'id', 'recipient', 'message_id', 'originator', 'text', 'status', 'created_at', 'updated_at'
    ];

}
