<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_company');
            $table->unsignedBigInteger('id_customer');
            $table->string('name_company')->nullable();
            $table->string('name_customer')->nullable();
            $table->string('order_number')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('url_order')->nullable();
            $table->date('date');
            $table->double('total');
            $table->enum('status', ['pendiente', 'confirmado', 'anulado', 'entregado', 'no entregado'])->default('pendiente');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_customer')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_company')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
