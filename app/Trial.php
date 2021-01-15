<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    public $table = "trials";

    public $timestamps = false;
    
    protected $fillable = [
        'email',
        'support',
        'number',
        'status'
    ];
}
