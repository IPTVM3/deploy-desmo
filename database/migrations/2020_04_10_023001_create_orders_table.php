<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mac')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('type_payement')->nullable();
            $table->string('card_number')->nullable();
            $table->string('exp_date')->nullable();
            $table->string('cv_code')->nullable();
            $table->string('zip')->nullable();
            $table->string('total')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
