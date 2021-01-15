<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropForeignKeySocialMediaIdStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('store', function (Blueprint $table) {
            $table->dropForeign(['social_media_id']);
            $table->dropColumn('social_media_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('store', function (Blueprint $table) {
            $table->integer('social_media_id')->unsigned();
            $table->foreign('social_media_id')
                ->references('id')->on('socialmedia')
                ->onDelete('cascade');
        });
    }
}
