<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumTable extends Migration
{
    public function up()
    {
        Schema::create('forum', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->text('body');
            $table->unsignedBigInteger('user_id');
            $table->integer('importance')->default(0)->nullable();
            $table->string('status')->default(true);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('forum');
    }
}
