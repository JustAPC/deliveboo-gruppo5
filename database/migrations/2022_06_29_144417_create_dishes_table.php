<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->tinyInteger('quantity')->default('1');
            $table->string('ingredients')->nullable();
            $table->boolean('available');
            $table->decimal('price', 5, 2);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('dishcategory_id')->nullable();
            $table->foreign('dishcategory_id')->references('id')->on('dishcategories')->onDelete('set null');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('dishes');
    }
}
