<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestFormDeliveryMenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_form_delivery_men', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_convenio');
            $table->string('name');
            $table->string('last_name');
            $table->string('ci');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('vehicle_type');
            $table->string('vehicle_plate');
            $table->string('vehicle_year');
            $table->string('vehicle_make');
            $table->string('url_file')->nullable();
            $table->string('vehicle_description');
            $table->enum('status', ['aprobado', 'denegado', 'revision'])->default('revision');
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
        Schema::dropIfExists('request_form_delivery_men');
    }
}
