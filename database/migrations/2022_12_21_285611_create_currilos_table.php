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
        Schema::create('currilos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_mother');
            $table->string('name_father');
            $table->date('date_birth');
            $table->string('cpf');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('logradouro');
            $table->string('cep');
            $table->string('telefone');
            $table->string('status');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('especialidade_id')->unsigned();
            $table->foreign('especialidade_id')->references('id')->on('especialidades');
            $table->text('experiencia');
            $table->softDeletes();
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
        Schema::dropIfExists('currilos');
    }
};
