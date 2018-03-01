<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('title', 150);
            $table->string('subtitle', 150);
            $table->string('url', 150);
            $table->string('keywords', 200);
            $table->string('description', 200);
            $table->text('annotation');
            $table->text('text');
            $table->text('images');
            $table->text('docs');
            $table->integer('author_id')->unsigned()->default(1);
            $table->foreign('author_id')->references('id')->on('users');
            $table->dateTime('published_start');
            $table->dateTime('published_end');
            $table->softDeletes();
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
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
