<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
