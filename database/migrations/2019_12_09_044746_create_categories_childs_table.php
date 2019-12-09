<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesChildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_childs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cat_child_name');
            $table->bigInteger('cats_id')->unsigned();
            $table->foreign('cats_id')->references('id')->on ('categories')->onDelete('cascade');
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
        Schema::dropIfExists('categories_childs');
    }
}
