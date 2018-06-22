<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceuilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceuils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('primeTextAcc');
            $table->string('secTextAcc');
            $table->string('ImageAccUrl');

            $table->string('imagefdAppUrl');
            $table->string('enteteTextApp');
            $table->string('descTextApp');

            $table->string('emailTextContact');
            $table->string('num1TextContact');
            $table->string('num2TextContact');

            $table->string('numAvenenue');
            $table->string('villeCommune');
            $table->string('paysProv');

            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
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
        Schema::dropIfExists('acceuils');
    }
}
