<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogoautosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogoautos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('colore');
            $table->integer('cilindrata');
            $table->integer('potenza');
            $table->integer('misuraruote');
            $table->string('tipologia');
            $table->integer('kmLitro');
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
        Schema::dropIfExists('catalogoautos');
    }
}
