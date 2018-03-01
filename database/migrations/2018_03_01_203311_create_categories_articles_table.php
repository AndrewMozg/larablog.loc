<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_articles', function (Blueprint $table) {
            //
            $table->increments('id');

            $table->integer('articles_id')->unsigned()->default(1);
            $table->foreign('articles_id')->references('id')->on('articles');

            $table->integer('categories_id')->unsigned()->default(1);
            $table->foreign('categories_id')->references('id')->on('categories');

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
        Schema::table('categories_articles', function (Blueprint $table) {
            //
        });
    }
}
