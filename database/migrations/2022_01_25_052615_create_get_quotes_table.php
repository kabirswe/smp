<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('mobile_number');
            $table->string('company_name');
            $table->string('company_ein');
            $table->string('website');
            $table->string('radio_one');
            $table->string('radio_two');
            $table->string('product_quantity');
            $table->string('serving');
            $table->string('budget');
            $table->string('delivery_period');
            $table->string('radio_three');
            $table->string('packaging');
            $table->string('desired_label');
            $table->string('radio_four');
            $table->string('storage_fulfillment');
            $table->string('text_box');
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
        Schema::dropIfExists('get_quotes');
    }
}
