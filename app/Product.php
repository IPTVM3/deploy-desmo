<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable = [
        'mac',
        'email',
        'product_id',
        'type_payement',
        'card_number',
        'exp_date',
        'cv_code',
        'zip',
        'total',
        'mac',
        'categorie_id',
        'status'
    ];


    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function options()
    {
        return $this->hasMany(ProductOption::class);
    }

    public function orderlines()
    {
        return $this->hasMany(OrderLine::class);
    }
}
