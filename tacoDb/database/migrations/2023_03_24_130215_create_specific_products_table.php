<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('specific_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('transportation');
            $table->bool('seasonality');
            $table->string('packaging');
            $table->string('procedure');
            $table->string('ingredients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specific_products');
    }
};
