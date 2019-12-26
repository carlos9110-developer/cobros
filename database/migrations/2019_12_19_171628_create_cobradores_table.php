<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCobradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobradores', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('restrict');
            $table->unsignedInteger('id_usuario');
            $table->string('cedula','100')->unique();
            $table->string('nombre','100');
            $table->string('direccion','200');
            $table->string('celular','200');
            $table->charset   = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
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
        Schema::dropIfExists('cobradores');
    }
}
