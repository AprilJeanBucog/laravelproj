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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function up(): void
    {
        Schema: :create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->date('birth_date');
            $table->string('course');
            $table->integer('year');
            $table->char('section', 1);
            $table->string('email')->unique();
            $table->timestamps();
        });
    }
    {
        Schema::dropIfExists('students');
    }
};