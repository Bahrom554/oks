<?php

namespace Modules\Playmobile\Components;

use App\User;
use GuzzleHttp\Client;
use Modules\Playmobile\Entities\SendSms;
use Psy\Util\Json;

class PlaymobileSend
{
    /**
     * @param $recipient
     * @param $text
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function sendSms($recipient, $text)
    {
        $message_id = date("Y-m-d-H-i-s");

        $message = array(
            'messages' => array(
                array(
                    'recipient' => $recipient,
                    'message-id' => $message_id,
                    'sms' => array(
                        'originator' => config('system.playmobile.PLAYMOBILE_ORIGINATOR'),
                        'content' => array(
                            'text' => $text
                        )
                    )
                ),
            )
        );
        SendSms::create([
            'recipient' => $recipient,
            'originator' => config('system.playmobile.PLAYMOBILE_ORIGINATOR'),
            'message_id' => $message_id,
            'text' => $text,
            'status' => User::STATUS_ACTIVE
        ]);

        $client = new Client([
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);
        try {
            $client->request('POST', "http://91.204.239.44/broker-api/send", [
                'auth' => array(config('playmobile.PLAYMOBILE_USERNAME'), config('playmobile.PLAYMOBILE_PASSWORD')),
                'body' => Json::encode($message),
            ]);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }
}
