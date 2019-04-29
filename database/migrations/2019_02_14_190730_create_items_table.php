<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actress_id')->nullable();
            $table->string('title')->nullable();
            $table->string('volume')->nullable();
            $table->string('affiliateURL')->nullable();
            $table->string('affiliateURLsp')->nullable();
            $table->string('imageURL')->nullable();
            $table->string('dmm_id')->nullable();
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
        Schema::dropIfExists('items');
    }
}
