<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social',30);
            $table->string('puesto',30);
            $table->date('f_inicio');
            $table->date('f_fin');
            $table->string('nivel_experiencia');
            $table->unsignedBigInteger('candidates_rut')->nullable();

            $table->foreign('candidates_rut')
                  ->references('rut')->on('candidates')
                  ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('experiences');
    }
}
