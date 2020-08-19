<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();;
            $table->string('description')->nullable();;
            $table->string('url_image')->nullable();;
            $table->enum('status', ['activo', 'inactivo'])->default('activo');
            $table->integer('order')->nullable();;
            $table->string('url_btn')->nullable();
            $table->string('text_btn')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
