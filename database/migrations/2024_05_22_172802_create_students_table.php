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
            $table->foreignId('user_id');
            $table->foreignId('plano_atual_id');
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->date('data_inicio');
            $table->timestamps();

            $table->foreign('user_id')->on('users')->references('id');
            $table->foreign('plano_atual_id')->on('workout_plans')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('students_user_id_foreign');
            $table->dropForeign('students_plano_atual_id_foreign');
           
            $table->dropColumn('user_id');
            $table->dropColumn('plano_atual_id');
        });

        Schema::dropIfExists('students');
    }
};
