<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'price',
        'image',
        'category_id'
    ];

    protected $attributes = [
        'image' => "https://picsum.photos/200/300",
    ];

    //default is defined as category_id hence it is optional to insert$ composer require itsgoingd/clockwork


    protected $with = ['category'];

    public function category()
    {
        // hasOne
        //Product belongs to category

        return $this->belongsTo(Category::class, 'category_id');
    }
}
