<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::defaultStringLength(191);
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content',300);
            $table->date('date_com');
            $table->bigInteger('id_new')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_new')->references('id')->on('news')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('comments');
    }
}
