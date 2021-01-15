<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy', function (Blueprint $table) {
            $table->increments('id');
            $table->text('refund_policy')->nullable();
            $table->text('privacy_policy')->nullable();
            $table->text('shipping_policy')->nullable();
            $table->text('terms_of_service')->nullable();
            $table->text('faq')->nullable();
            $table->text('about_us')->nullable();
            $table->text('team')->nullable();
            $table->text('contact_us')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('policy');
    }
}
