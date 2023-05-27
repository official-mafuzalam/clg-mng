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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->integer('user_id');
            $table->string('technology');
            $table->string('admission_year');
            $table->string('current_semester');
            $table->string('user_name');
            $table->string('clg_id');
            $table->integer('roll_no');
            $table->string('mobile_number');
            $table->string('deposit_category');
            $table->integer('deposit_amount');
            $table->string('comment');
            $table->integer('deposit_challan_no');
            $table->integer('inserter_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};