<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainNotPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_not_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author', 50);
            $table->string('filter', 50);
            $table->time('time_create');
            $table->string('content_main', 90);
            $table->string('content', 140);
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
        Schema::dropIfExists('main_not_photos');
    }
}
