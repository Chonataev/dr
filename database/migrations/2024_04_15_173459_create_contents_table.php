<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('themes_id');
            $table->binary('body');
            $table->string('status');
            $table->timestamps();

            $table->foreign('themes_id')->references('id')->on('themes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
