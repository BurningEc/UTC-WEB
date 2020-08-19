<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('ci')->unique();
            $table->string('ruc')->unique()->nullable();
            $table->string('name');
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('birth_date');
            $table->enum('gender',['masculino','femenino']);
            $table->unsignedBigInteger('id_user');
            $table->enum('status',['activo','inactivo'])->default('activo');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
