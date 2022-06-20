<?php


namespace App\Http\Repositories;


use App\Http\Repositories\Interfaces\iPhotoBankInterface;
use App\Models\Bought;
use App\Models\PhotoBank;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Modules\Filemanager\Entities\Files;
use Modules\Filemanager\Http\Repository\FileRepository;

class PhotoBankRepository extends BaseRepository implements iPhotoBankInterface
{
    /**
     * @param $photo_bank_id
     * @param $type
     * @return mixed|void
     */
    public function bought($photo_bank_id, $type)
    {
        try {
            $photo = PhotoBank::findOrFail($photo_bank_id);
            $file = Files::findOrFail($photo->file_id);

            $photoRepository = new PhotoBankRepository();
            $user = Auth::user();

            $typeS = $photoRepository->getTypeString($type) . '_price';
            $typeString = $typeS . '_price';

            $userRepository = new UserRepository();
            $balance = $userRepository->getBalanceAttribute($user->phone);
            if ($photo->{$type} > $balance) {
                throw new \DomainException('You have not enough balance', 400);
            }

            $transactionsRepository = new TransactionsRepository();
            $transactionsRepository->createExpense($user->phone, $photo_bank_id, $photo->{$typeString});

            Bought::create([
                'photo_bank_id' => $photo->id,
                'user_id' => Auth::id(),
                'type' => $type,
                'price' => $photo->{$typeString},
                'status' => 1
            ]);

           $fileRepository = new FileRepository();
           $response = $fileRepository->downloadFile($file, $typeS);

        } catch (\Exception $exception) {
            throw new \DomainException($exception->getMessage(), $exception->getCode());
        }
        return $response;
    }

    /**
     * @param $type
     * @return mixed|string
     */
    public function getTypeString($type)
    {
        switch ($type) {
            case Bought::TYPE_LOW:
                $string = 'low';
                break;
            case Bought::TYPE_NORMAL:
                $string = 'normal';
                break;
            case Bought::TYPE_ORIGIN:
                $string = 'origin';
                break;
            default:
                $string = 'small';
                break;
        }
        return $string;
    }

    /**
     * @param $type
     * @return int|mixed
     */
    public function getTypeId($type)
    {
        switch ($type) {
            case 'small':
                $string = Bought::TYPE_LOW;
                break;
            case 'normal':
                $string = Bought::TYPE_NORMAL;
                break;
            case 'origin':
                $string = Bought::TYPE_ORIGIN;
                break;
            default:
                $string = Bought::TYPE_LOW;
                break;
        }
        return $string;
    }

    /**
     * @param $type
     * @return bool|mixed
     */
    public function checkType($type)
    {
        if ($type == 'low') {
            return true;
        }
        if ($type == 'normal') {
            return true;
        }
        if ($type == 'origin') {
            return true;
        }
        return false;
    }
}
