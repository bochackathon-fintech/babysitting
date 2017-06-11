<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIbansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('bank_bic');
            $table->string('account_number');
            $table->string('iban_number');
            $table->string('label');
            $table->string('display');
            $table->boolean('default')->default(true);
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
        Schema::dropIfExists('ibans');
    }
}
