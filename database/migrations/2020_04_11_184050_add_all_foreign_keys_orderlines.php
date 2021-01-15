<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAllForeignKeysOrderlines extends Migration
{
   
    public function up()
    {
        Schema::table('orderlines', function (Blueprint $table) {
            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');

            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('cascade');

            $table->foreign('productoption_id')
                ->references('id')->on('productoptions')
                ->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::table('orderlines', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['order_id']);
            $table->dropForeign(['productoption_id']);
        });
    }
}
