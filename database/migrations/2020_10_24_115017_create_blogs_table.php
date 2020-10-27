<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('blog_type');
            $table->string('title')->unique();
            $table->string('slug_title');
            $table->string('thumbnail_image')->nullable();
            $table->string('blog_media')->nullable();
            $table->string('subject');
            $table->longText('description');
            $table->string('tags', 1000);
            $table->unsignedBigInteger('viewed');
            $table->boolean('published')->default(0);
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
        Schema::dropIfExists('blogs');
    }
}