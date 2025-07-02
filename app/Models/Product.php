<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_pt',
        'name_en',
        'description_pt',
        'description_en',
        'price',
        'image_path',
    ];
}
