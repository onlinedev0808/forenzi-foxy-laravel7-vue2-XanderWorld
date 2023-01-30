<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $primaryKey = 'user_id';
    protected $table = 'role_user';
    protected $fillable = ['user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
