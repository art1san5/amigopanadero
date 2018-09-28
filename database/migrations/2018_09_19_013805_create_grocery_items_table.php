<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroceryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grocery_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('grocery_id')->unsigned();
            $table->foreign('grocery_id')->references('id')->on('groceries')->onDelete('cascade');
            $table->text('recipe');
            $table->string('bakers')->nullable();
            $table->string('grams')->nullable();
            $table->integer('index')->unsigned();
            $table->boolean('isChecked')->default(0);
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
        Schema::dropIfExists('grocery_items');
    }
}
