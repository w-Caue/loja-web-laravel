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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id');
            $table->float('valor', 8, 2);
            $table->date('data_pagamento');
            $table->enum('status', ['Pago', 'Pendente']);
            $table->timestamps();

            $table->foreign('aluno_id')->on('students')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('payments_aluno_id_foreign');
           
            $table->dropColumn('aluno_id');
        });

        Schema::dropIfExists('payments');
    }
};
