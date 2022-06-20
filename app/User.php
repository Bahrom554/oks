<?php

namespace App;

use App\Models\Reasons;
use App\Models\Region;
use App\Models\Roles;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;
use Modules\Filemanager\Entities\Files;
use PhpParser\Parser\Tokens;

class User extends Authenticatable implements  MustVerifyEmail
{
    use Notifiable, HasApiTokens;

    const ROLE_ADMIN = 'admin';
    const ROLE_CLIENT = 'client';

    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;
    const ROLE_ADMINS = [self::ROLE_ADMIN];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'reason_id', 'photo', 'region_id', 'phone', 'full_name', 'status', 'balance'
    ];

    protected $appends = [
        'role',
        'photo_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRoleAttribute()
    {
        $role = Roles::where(['user_id' => $this->id])->first();
        if (is_object($role)) {
            return $role->role;
        }
    }

    public function role()
    {
        return $this->hasOne(Roles::class);
    }


    public function getPhotoIdAttribute()
    {
        return Files::where('id' ,$this->photo)->first();
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
