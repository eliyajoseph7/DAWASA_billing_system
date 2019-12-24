<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKibahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kibahas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('street');
            $table->string('metre_no');
            $table->string('gender');
            $table->date('start');
            $table->string('status');
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
        Schema::dropIfExists('kibahas');
    }
}
