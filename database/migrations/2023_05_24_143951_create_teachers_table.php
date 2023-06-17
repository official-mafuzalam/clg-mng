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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('w_type');
            $table->string('teacher_name');
            $table->string('teacher_nid');
            $table->string('teacher_email');
            $table->string('teacher_gender');
            $table->string('technology');
            $table->string('teacher_mobile');
            $table->string('address_street');
            $table->string('address_postOffice');
            $table->string('address_upazila');
            $table->string('address_zila');
            $table->string('password');
            $table->string('designation');
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
        Schema::dropIfExists('teachers');
    }
};
