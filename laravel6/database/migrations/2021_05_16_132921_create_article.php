<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            //
            $table->bigIncrements('a_id');
            $table->char('title', 100);
            $table->tinyInteger('category');
            $table->tinyInteger('tags');
            $table->text('body');
            $table->tinyInteger('user');
            $table->unsignedInteger('views');
            $table->tinyInteger('tui');
            $table->unsignedInteger('created_times');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article');
    }
}
