<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnRelationshipSocialMediaStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('socialmedia', function (Blueprint $table) {
            $table->integer('store_id')->unsigned();
            $table->foreign('store_id')
                ->references('id')->on('store')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('socialmedia', function (Blueprint $table) {
            $table->dropColumn('store_id');
        });
    }
}
