<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /*Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->boolean('bought');
            $table->date('expiration date');
            $table->string('picture');
        });*/

        Schema::create('products', function($table){
            $table->integer('id')->primary()->unique()->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();  
            $table->string('name');
            $table->string('transportation');
            $table->boolean('seasonality');
            $table->string('packaging');
            $table->string('procedure');
            $table->string('ingredients');
            $table->string('picture');
            $table->date('expiration');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};


