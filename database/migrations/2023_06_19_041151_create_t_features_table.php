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
        Schema::create('t_features', function (Blueprint $table) {
            $table->id();
            $table->integer('login_approve')->default(1);
            $table->integer('user_id');
            $table->string('user_name');
            $table->integer('s_add')->default(0);
            $table->integer('s_all')->default(0);
            $table->integer('s_trash')->default(0);
            $table->integer('s_u_sem')->default(0);
            $table->integer('t_add')->default(0);
            $table->integer('t_all')->default(0);
            $table->integer('t_trash')->default(0);
            $table->integer('t_features')->default(0);
            $table->integer('n_add')->default(0);
            $table->integer('n_all')->default(0);
            $table->integer('n_archived')->default(0);
            $table->integer('r_publish')->default(0);
            $table->integer('r_check')->default(0);
            $table->integer('f_deposit')->default(0);
            $table->integer('f_quarry')->default(0);
            $table->integer('c_add')->default(0);
            $table->integer('c_all')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_features');
    }
};