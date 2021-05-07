<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'categoryId', 'name', 'quanity', 'unitprice','sellingprice','receive','expire'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
