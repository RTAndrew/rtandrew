<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextoProjectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texto_projecto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('image_url');
            $table->longText('descricao');
            $table->string('slug')->unique();
            $table->boolean('featured')->default(false);
            $table->bigInteger('view_count')->default(0);
            $table->timestamps();

            // Relacao com o Projecto
            $table->integer('projecto_txt_id')->unsigned()->index()->nullable();
                $table->foreign('projecto_txt_id')->references('id')->on('projecto_txt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('texto__projecto');
    }
}
