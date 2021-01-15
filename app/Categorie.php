<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{


    protected $fillable = [
        'name',
        'description',
        'img'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
