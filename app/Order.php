<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    protected $fillable = [
        'mac',
        'email',
        'type_payement',
        'card_number',
        'exp_date',
        'cv_code',
        'zip',
        'total',
        'status'
    ];


    public function orderlines()
    {
        return $this->hasMany(OrderLine::class);
    }



}
