<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class userDetail extends Model
{
    protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
