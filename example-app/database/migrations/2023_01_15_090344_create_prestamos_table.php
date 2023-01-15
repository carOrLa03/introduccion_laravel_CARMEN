<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('num_pedido');
            $table->integer('cod_libro')->unsigned();
            $table->integer('cod_user')->unsigned();
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->boolean('devuelto');

            $table->foreign('cod_libro')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('cod_user')->references('id')->on('usuarios')->onDelete('cascade');

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
        Schema::dropIfExists('prestamos');
    }
};
