<?php


namespace App\Http\Repositories\Interfaces;


interface iUserInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param $phone
     * @return mixed
     */
    public function getOrCreateUser($phone);

    /**
     * @param $phone
     * @return mixed
     */
    public function sendSms($phone);

    /**
     * @param $phone
     * @return mixed
     */
    public function getBalanceAttribute($phone);
}
