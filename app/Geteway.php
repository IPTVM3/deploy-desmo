<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geteway extends Model
{
    public $table = "geteways";


    protected $fillable = [
        'type',
        'client_account',
        'api_key',
        'secret_key',
        'is_active',
        'mode',
        'trial_ends_at',
        'ends_at',
        'store_id',
    ];

    public function store(){
        return $this->belongsTo('App\Store','store_id');
    }
}
