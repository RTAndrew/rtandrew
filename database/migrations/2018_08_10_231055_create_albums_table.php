<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albuns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->unique();
            $table->longText('descricao');
            $table->string('slug');
            $table->string('image_hero_url');
            $table->bigInteger('view_count')->default(0);
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
        Schema::dropIfExists('albuns');
    }
}
