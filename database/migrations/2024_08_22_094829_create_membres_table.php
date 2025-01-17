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
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('genre')->nullable();
            $table->string('age')->nullable();
            $table->string('role')->default('membre'); 
            $table->string('profession')->nullable();
            $table->string('email')->unique();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('status', ['Pending','Active'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres');
    }
};
