<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('placa')->unique();
            $table->integer('año');
            $table->integer('kilometraje');
            $table->string('tipo_combustible');
            $table->decimal('precio_nuevo', 10, 2);
            $table->decimal('precio_usado', 10, 2);
            $table->string('transmision');
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('autos');
    }
};

