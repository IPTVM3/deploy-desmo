<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    public $table = "orderlines";

    protected $fillable = [
        'product_id',
        'order_id',
        'productoption_id',
        'qty',
        'price'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function productoption()
    {
        return $this->belongsTo(ProductOption::class);
    }
}
