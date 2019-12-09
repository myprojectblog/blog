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
            $table->bigIncrements('id');
            $table->text('post_title');
            $table->text('post_details');
            $table->string('post_img');
            $table->bigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on ('categories')->onDelete('cascade');
            $table->bigInteger('cat_child_id')->unsigned();
            $table->foreign('cat_child_id')->references('id')->on ('categories_childs')->onDelete('cascade');
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
