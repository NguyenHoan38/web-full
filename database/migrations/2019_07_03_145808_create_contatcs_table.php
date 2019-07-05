<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('map')->nullable();
            $table->string('address');
            $table->string('Hotline');
            $table->string('Phone');
            $table->string('email');
            $table->string('web');
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
        Schema::dropIfExists('contatcs');
    }
}
