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
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plano_id');
            $table->string('nome');
            $table->text('descricao');
            $table->integer('ordem');
            $table->timestamps();

            $table->foreign('plano_id')->on('workout_plans')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('workouts', function (Blueprint $table) {
            $table->dropForeign('workouts_plano_id_foreign');
           
            $table->dropColumn('plano_id');
        });

        Schema::dropIfExists('workouts');
    }
};
