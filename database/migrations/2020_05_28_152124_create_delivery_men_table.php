<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryMenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_men', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_convenio');
            $table->string('ci')->unique();
            $table->string('ruc')->unique()->nullable();
            $table->string('name');
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('birth_date');
            $table->enum('gender', ['masculino', 'femenino']);


            $table->string('vehicle_type');
            $table->string('vehicle_make');
            $table->string('vehicle_plate');
            $table->string('vehicle_year');
            $table->string('vehicle_description');
            $table->string('url_vehicle')->nullable();
            $table->string('url_file')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->enum('status_order',['disponible','ocupado'])->default('ocupado');
            $table->unsignedBigInteger('id_user');
            $table->enum('status', ['aprobado', 'denegado', 'revision'])->default('aprobado');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_convenio')->references('id')->on('convenios')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_men');
    }
}
