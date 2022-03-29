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
        Schema::create('procesos', function (Blueprint $table) {
            $table->string('ID')->id();
            $table->string('IdP');
            $table->foreign('IdP')->references('ID')->on('macroprocesos')->onDelete('cascade');
            $table->integer('IdP_nro');
            $table->string('Proceso');
            $table->string('Nombre_largo');
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
        Schema::dropIfExists('procesos');
    }
};
