<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('rg');
            $table->string('cpf');
            $table->string('profissao');
            $table->string('estado_civil');
            $table->string('longradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->integer('fk_cidade')->unsigned()->nullable();
            $table->foreign('fk_cidade')->references('id')->on('cidades');
            $table->integer('fk_estado')->unsigned()->nullable();
            $table->foreign('fk_estado')->references('id')->on('estados');
            $table->string('nacionalidade');
            $table->string('telefone');
            $table->BigInteger('fk_users')->unsigned()->nullable();
            
            $table->timestamps();
            
        });

        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign('fk_users')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
