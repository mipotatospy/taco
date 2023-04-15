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

        Schema::create('cb_category', function($table){
            $table->integer('id')->primary()->unique()->unsigned();
            $table->integer('parent_id')->nullable();  
            $table->string('name');
            $table->string('picture');
        });

        Schema::table('cb_category', function (Blueprint $table) {
            $table->id();
            $table->foreign('parent_id')->references('id')->on('cb_category')->onUpdate('cascade')->onDelete('cascade');
            $table->string('transportation');
            $table->bool('seasonality');
            $table->string('packaging');
            $table->string('procedure');
            $table->string('ingredients');
            $table->string('picture');
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


