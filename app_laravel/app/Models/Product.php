<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'ID',
        'category_id',
        'name',
        'selling_price',
        'buying_price',
        'stock',
        'description',
    ];
}

