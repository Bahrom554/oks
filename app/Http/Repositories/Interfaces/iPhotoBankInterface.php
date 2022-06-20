<?php


namespace App\Http\Repositories\Interfaces;


interface iPhotoBankInterface
{
    /**
     * @param $photo_bank_id
     * @param $type
     * @return mixed
     */
    public function bought($photo_bank_id, $type);

    /**
     * @param $type
     * @return mixed
     */
    public function getTypeId($type);

    /**
     * @param $type
     * @return mixed
     */
    public function getTypeString($type);

    /**
     * @param $type
     * @return mixed
     */
    public function checkType($type);
}
