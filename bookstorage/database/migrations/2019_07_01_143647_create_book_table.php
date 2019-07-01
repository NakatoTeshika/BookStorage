<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->integer('Year_of_publishing');
            $table->integer('Price');
            $table->integer('Number_of_copies');
            $table->integer('Number_of_pages');
            $table->text('Description');
            $table->unsignedinteger('Genre_ID');
            $table->unsignedinteger('Binding_ID');
            $table->unsignedinteger('Chiper_Public_house');
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
        Schema::dropIfExists('book');
    }
}
