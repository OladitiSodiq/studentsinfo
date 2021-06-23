<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Friday extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Friday', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('class')->nullable();
          $table->string('satrt')->nullable();
          $table->string('end')->nullable();
          $table->string('lecturerName')->nullable();
          $table->string('course')->nullable();
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
        //
        Schema::dropIfExists('Friday');
    }
}
