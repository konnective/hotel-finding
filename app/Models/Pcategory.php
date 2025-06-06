<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pcategory extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
