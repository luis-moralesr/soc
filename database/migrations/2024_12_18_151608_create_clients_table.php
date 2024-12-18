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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->char('phone');
            $table->string('curp')->unique();
            $table->string('address');
            $table->string('age');
            $table->foreignId('executive_id');
            $table->enum('status', ['active','inactive'])->default('active');
            $table->timestamps();

            $table->foreign('executive_id')->references('id')->on('executives');

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
