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
        Schema::create('macroprocesos', function (Blueprint $table) {
            $table->string('ID')->id();
            $table->string('IdM');
            $table->integer('Idm_num');
            $table->string('MacroProceso');
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
        Schema::dropIfExists('macroprocesos');
    }
};
