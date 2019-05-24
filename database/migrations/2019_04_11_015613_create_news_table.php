<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::defaultStringLength(191);
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titles',250);
            $table->longText('summary');
            $table->date('date_post');
            $table->longText('content');
            $table->integer('view');
            $table->string('img',250);
            $table->string('source');
            $table->bigInteger('id_cate')->unsigned();
            $table->foreign('id_cate')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');  
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
        Schema::dropIfExists('news');
    }
}
