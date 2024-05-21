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
        Schema::create('student_exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id'); 
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->comment('student_id =id onstudents table');         
            $table->string('id_no')->nullable();

            $table->string('exams_type'); 
            $table->string('semester')->nullable('if exams is by semester bases'); 
            $table->string('exams_year')->comment('the year exams was taken'); 
            $table->string('subject_code');
            $table->string('subject_name');

            $table->date('exams_date')->nullable()->comment('The date exams was taken or sat');
            $table->double('objective_marks')->nullable()->comment('student objective or class standard marks');
            $table->float('obtained_marks')->nullable()->comment('student can register but not yet taken exams'); 
            $table->string('grade');
           
            $table->float('remarks')->nullable()->comment('comments or remarks');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_exams');
    }
};
