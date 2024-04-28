<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('themes_id');
            $table->unsignedBigInteger('user_id');
            $table->string('status')->default(true);
            $table->timestamps();

            $table->foreign('themes_id')->references('id')->on('themes');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
