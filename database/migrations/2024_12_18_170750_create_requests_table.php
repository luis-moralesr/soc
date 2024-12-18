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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('executive_id');
            $table->string('product');
            $table->decimal('price', 8, 2);
            $table->Integer('amount');
            $table->decimal('total', 8, 2);
            $table->enum('status', ['active','inactive'])->default('active');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('executive_id')->references('id')->on('executives');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
