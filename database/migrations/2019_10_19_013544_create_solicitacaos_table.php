<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->string('tipo');
            $table->BigInteger('fk_users')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('solicitacoes', function (Blueprint $table) {
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
        Schema::dropIfExists('solicitacoes');
    }
}
