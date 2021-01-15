<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    public $table = "policy";


    protected $fillable = [
        'refund_policy',
        'privacy_policy',
        'shipping_policy',
        'terms_of_service',
        'faq',
        'about_us',
        'team',
        'contact_us',
        'store_id',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

}