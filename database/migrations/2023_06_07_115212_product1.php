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
        Schema::create('product1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image',255);
            $table->text('description',255);
            $table->decimal('price',5,4);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product1');
    }
};
