<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_album', function (Blueprint $table) {
            $table->increments('id');

            // Foto
            $table->integer('foto_id')->unsigned()->index();
                $table->foreign('foto_id')->references('id')->on('fotos')->onDelete('cascade');

            // album
            $table->integer('album_id')->unsigned()->index();
                $table->foreign('album_id')->references('id')->on('albuns')->onDelete('cascade');

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
        Schema::dropIfExists('foto_album');
    }
}
