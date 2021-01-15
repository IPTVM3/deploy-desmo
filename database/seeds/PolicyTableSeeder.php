<?php

use Illuminate\Database\Seeder;

class PolicyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $policy = \App\Policy::create();
        $store = \App\Store::first();
        $store->policy()->save($policy);
    }
}
