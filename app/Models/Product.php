<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'category_id', 'name', 'quanity', 'unit_price','selling_price','photo'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
