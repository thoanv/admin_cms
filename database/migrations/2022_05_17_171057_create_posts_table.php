<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();

            $table->tinyInteger('view')->default(0);
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('display_home')->default(0);
            $table->tinyInteger('start')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('published')->default(0);
            $table->date('time_published')->nullable();

            $table->unsignedInteger('created_by');
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
        Schema::dropIfExists('posts');
    }
}
