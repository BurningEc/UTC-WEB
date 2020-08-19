<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_convenio');
            $table->string('company_name')->unique();
            $table->string('company_ruc')->unique()->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_type')->nullable();
            $table->string('company_description')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('url_merchant')->nullable();
            $table->string('url_file')->nullable();
            $table->enum('status', ['activo', 'inactivo'])->default('activo');
            $table->unsignedBigInteger('id_merchant');
            $table->timestamps();
            $table->foreign('id_merchant')->references('id')->on('merchants')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('companies');
    }
}
