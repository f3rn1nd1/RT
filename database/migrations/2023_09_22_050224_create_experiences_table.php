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
            $table->string('business_name',30);
            $table->string('post',30);
            $table->date('start_date');
            $table->date('finish_date');
            $table->text('description')->nullable;
            $table->string('location',30); 
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
