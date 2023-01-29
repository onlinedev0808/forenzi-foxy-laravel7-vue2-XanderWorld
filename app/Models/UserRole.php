<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $primaryKey = 'user_id';
    protected $table = 'role_user';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
