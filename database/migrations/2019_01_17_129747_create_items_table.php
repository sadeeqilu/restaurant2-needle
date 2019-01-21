<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('type');
            $table->string('item');
            $table->string('description');
            $table->decimal('price',5,2)->default(10.0);
            $table->integer('mins_to_prepare')->default(5);
            $table->integer('restaurant_id')->unsigned()->nullable();
            $table->timestamps();


            $table->foreign('restaurant_id')
                  ->references('id')
                  ->on('restaurants')
                  ->ondelete('cascade');
        });
        //
        // Schema::table('items', function($table){
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
