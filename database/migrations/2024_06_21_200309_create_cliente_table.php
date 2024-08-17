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
        Schema::create('cliente', function (Blueprint $table) {

            $table->bigIncrements('id'); // Auto-increment y clave primaria
            $table->char('Apellido', 50)->nullable();
            $table->char('Nombre', 50)->nullable();
            $table->string('Email', 100)->nullable();
            $table->string('Direccion', 100)->nullable();
            $table->string('Telefono', 100)->nullable();
            /*$table->date('dPerFecNac')->nullable();
            $table->integer('nPerEdad')->nullable(); // No auto-increment
            $table->decimal('nPerSueldo', 6, 2);
            $table->string('cPerRnd', 50)->default('defaultRndValue');
            $table->char('nPerEstado', 1)->default('1');
            $table->string('remember_token', 100)->nullable();
            //$table->timestamps();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
};
