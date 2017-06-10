<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /**

         *  {
        "website": "www.bankofcyprus.com",
        "bic": "BCYPCY2N",
        "full_name": "ΤΡΑΠΕΖΑ ΚΥΠΡΟΥ (001)",
        "short_name": "(+357) 2212 8000",
        "id": "bda8eb884efcef7082792d45"
        }

         */

        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('bank_id');
            $table->string('full_name');
            $table->string('short_name');
            $table->string('bic');
            $table->string('website');
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
        Schema::dropIfExists('banks');
    }
}
