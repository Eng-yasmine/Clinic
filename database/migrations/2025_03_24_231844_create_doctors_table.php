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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

            $table->string('name', 256);
            $table->string('email', 100)->unique();
            $table->string('phone', 50);
            $table->string('image')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->string('address', 256);
            $table->string('password', 256);
            $table->date('date_of_birth');
            $table->integer('years_of_experinces')->default(0);
            $table->integer('number_of_licence');
            $table->foreignId('major_id')->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
