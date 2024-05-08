<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisqusTable extends Migration
{
    public function up()
    {
        Schema::create('disqus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('forum_id');
            $table->unsignedBigInteger('disqus_id')->default(null)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->text('body');
            $table->string('status');
            $table->timestamps();

            $table->foreign('forum_id')->references('id')->on('forum')->onDelete('cascade');
            $table->foreign('disqus_id')->references('id')->on('disqus')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('disqus');
    }
}
