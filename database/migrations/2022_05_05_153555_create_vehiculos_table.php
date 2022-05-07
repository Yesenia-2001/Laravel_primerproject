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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->varchar('matricula');
            $table->string('nombreconduc');
            $table->integer('año');
            $table->varchar('placa');
            $table->integer('documentoconduc');
            $table->date('fechavencimiento');
/*             $table->file('tarjetapropiedad');
            $table->file('soat');
            $table->file('tecnomecanica'); */

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
        Schema::dropIfExists('vehiculos');
    }
};
