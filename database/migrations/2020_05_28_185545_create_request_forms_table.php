<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_convenio');
            $table->string('name');
            $table->string('last_name');
            $table->string('ci');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('company_name');
            $table->string('company_ruc');
            $table->string('company_address');
            $table->string('company_type');
            $table->string('company_description');
            $table->string('url_file')->nullable();
            $table->enum('status',['aprobado','denegado','revision'])->default('revision');
            $table->timestamps();
            //$table->foreign('id_convenio')->references('id')->on('convenios')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_forms');
    }
}
