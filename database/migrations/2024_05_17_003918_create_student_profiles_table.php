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
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id'); 
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->comment('student_id =id onstudents table');         
            $table->string('address')->nullable();
            $table->string('city')->nullable(); 
            $table->string('country')->nullable(); 
            $table->string('mobile')->nullable();         
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('guardian')->nullable();
            $table->string('guardian_tel')->nullable();
            $table->string('religion')->nullable();
            $table->string('id_no')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('code')->nullable();
            $table->string('image')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
