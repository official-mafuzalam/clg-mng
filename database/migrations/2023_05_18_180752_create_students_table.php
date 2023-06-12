<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('technology');
            $table->string('admission_year');
            $table->string('current_semester');
            $table->string('clg_id');
            $table->string('roll_no');
            $table->string('reg_no')->nullable();
            $table->string('student_name');
            $table->integer('student_nid');
            $table->string('student_email');
            $table->string('student_mobile');
            $table->string('student_gender');
            $table->string('father_name');
            $table->integer('father_nid');
            $table->string('father_mobile');
            $table->string('mother_name');
            $table->integer('mother_nid');
            $table->string('mother_mobile');
            $table->string('address_street');
            $table->string('address_postOffice');
            $table->string('address_upazila');
            $table->string('address_zila');
            $table->string('ssc_board');
            $table->string('ssc_group');
            $table->string('ssc_roll');
            $table->string('ssc_reg');
            $table->string('ssc_result');
            $table->string('hsc_board')->nullable();
            $table->string('hsc_group')->nullable();
            $table->string('hsc_roll')->nullable();
            $table->string('hsc_reg')->nullable();
            $table->string('hsc_result')->nullable();
            $table->string('password');
            $table->integer('inserter_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};