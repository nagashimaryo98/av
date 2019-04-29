<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actress', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('ruby')->nullable();
            $table->string('bust')->nullable();
            $table->string('cup')->nullable();
            $table->string('waist')->nullable();
            $table->string('hip')->nullable();
            $table->string('height')->nullable();
            $table->string('birthday')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('hobby')->nullable();
            $table->string('prefectures')->nullable();
            $table->string('imageURL')->nullable();
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
        Schema::dropIfExists('actress');
    }
}
