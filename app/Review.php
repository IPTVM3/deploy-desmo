<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Review extends Model
{


    protected $fillable = [
        'by',
        'body',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }



}
