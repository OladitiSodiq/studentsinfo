<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name')->nullable();
          $table->string('mobileNo')->nullable();
          $table->string('matricNo')->nullable();
          $table->string('email')->nullable();
          $table->string('password')->nullable();
          $table->string('level')->nullable();
          $table->string('address')->nullable();
          $table->string('image')->nullable();
          $table->string('role')->nullable();
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
       Schema::dropIfExists('students');
    }
}
