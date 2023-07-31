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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('education_level_id');
            $table->string('book_name');
            $table->string('writer_name');
            $table->string('description');
            $table->string('images');
            $table->string('videos')->nullable();
            $table->integer('price');
            $table->string('year');
            $table->boolean('isSold')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
