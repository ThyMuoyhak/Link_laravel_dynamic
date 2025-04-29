<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Name column
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Gender column with enum
            $table->string('phone')->nullable(); // Phone column, nullable
            $table->string('email')->unique()->nullable(); // Email column, unique and nullable
            $table->text('address')->nullable(); // Address column, nullable
            $table->string('photo')->nullable(); // Photo column for storing file path, nullable
            $table->text('note')->nullable(); // Note column, nullable
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
}