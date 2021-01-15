<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public $table = "store";
    //SOCIAL MEDIAS
    public function socialmedias()
    {
        return $this->hasMany('App\SocialMedia');
    }
    //STORE POLICYS
    public function policy()
    {
        return $this->hasOne(Policy::class);
    }
    //STORE GETEWAYS
    public function geteways()
    {
        return $this->hasMany(Geteway::class);
    }

    //FILLABLE FIELDS
    protected $fillable = [
        'name',
        'email',
        'bio',
        'legal_name',
        'phone',
        'fix',
        'address',
        'apartement',
        'street',
        'city',
        'zip_code',
        'country',
        'logo',
        'timezone',
        'unit_system',
        'currency',
        'email_verified_at',
        'active',
        'policy_id',
    ];

    //GET FULL ADDRESS
    public function fullAddress(){
        $fullAddress = '';
        if ($this->apartement){
            $fullAddress = $this->apartement .' ';
        }
        if ($this->street){
            $fullAddress = $fullAddress.$this->street .' ';
        }
        $fullAddress = $fullAddress.$this->address;
        if ($this->zip_code){
            $fullAddress = $fullAddress.', '.$this->zip_code;
        }
        return $fullAddress;
    }

    //UNSEVED SOCIAL MEDIAS
    public function getUnsaveSocialMedia(){
        $exept_list=[];
        $social_list = ['facebook','pinterest ','instagram ','twitter '];
        foreach ($this->socialmedias as $link){
            foreach ($social_list as  $index => $link1){
                if($link1 == $link->type) {
                    unset($social_list[$index]);
                }
            }
        }
        return $social_list;
    }

    //CHECK IF PAYPAL IS ACTIVE
    public function PayPal_isActive(){
        $geteways_list = Store::first()->geteways;

        foreach ($geteways_list as $geteway){
            if($geteway->type == 'PayPal') return true;
        }
        return false;
    }
    //CHECK IF STRIPE IS ACTIVE
    public function Stripe_isActive(){
        $geteways_list = Store::first()->geteways;

        foreach ($geteways_list as $geteway){
            if($geteway->type == 'Stripe') return true;
        }
        return false;
    }
}
