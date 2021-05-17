<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            //
            $table->bigIncrements('b_id');
            $table->char('text_info', 100);
            $table->char('img', 100);
            $table->char('link_url', 100);
            $table->tinyInteger('is_active');
            $table->engine = 'InnoDB';
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('banner');
    }
}
