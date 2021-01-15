<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    public $table = "socialmedia";


    protected $fillable = [
        'type',
        'address',
        'store_id',
    ];

    public function store(){
        return $this->belongsTo('App\Store','store_id');
    }

}
