<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            //INFORMACION PERSONAL
            $table->integer('rut');
            $table->string('name',50);
            $table->string('last_name',50);
            $table->string('address',30);
            $table->string('email',40)->unique();
            $table->timestamp('email_verified_at')->nullable();
            //RESUMEN LABORAL
            $table->text('resume');
            //EXPERIENCIA LABORAL
            $table->string('name_company',30);
            $table->string('location',30);
            $table->string('post',30);
            $table->date('start_date');
            $table->date('finish_date');
            $table->text('responsibility');
            //RESUMEN EDUCACIONAL
            $table->string('name_institution',30);
            $table->string('tittle',30);
            $table->string('language',20);
            $table->text('aditional_quali',30);
            $table->rememberToken();
            $table->timestamps();
            //FK
            $table->unsignedBigInteger('companies_id')->nullable();
            $table->foreign('companies_id')
                  ->references('id')->on('companies')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
}
