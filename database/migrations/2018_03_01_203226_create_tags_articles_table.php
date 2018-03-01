<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_articles', function (Blueprint $table) {
            //
            $table->increments('id');

            $table->integer('articles_id')->unsigned()->default(1);
            $table->foreign('articles_id')->references('id')->on('articles');

            $table->integer('tags_id')->unsigned()->default(1);
            $table->foreign('tags_id')->references('id')->on('tags');

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
        Schema::table('tags_articles', function (Blueprint $table) {
            //
        });
    }
}
