<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{

    public $table = "productoptions";

    protected $fillable = [
        'name',
        'price',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orderlines()
    {
        return $this->hasMany(OrderLine::class);
    }

}
