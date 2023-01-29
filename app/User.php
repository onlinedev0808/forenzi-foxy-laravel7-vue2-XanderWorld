<?php

namespace App;

use App\Models\Order;
use App\Models\Role;
use App\Models\UserRole;
use App\Models\userDetail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userDetail()
    {
        return $this->hasOne(userDetail::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function userroles()
    {
        return $this->hasMany(UserRole::class);
    }
    
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
