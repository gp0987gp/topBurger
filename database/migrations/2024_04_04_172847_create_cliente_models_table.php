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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('imagem')->nullable(false);
            $table->string('nome')->nullable(false);
            $table->string('endereco')->nullable(false);
            $table->text('cpf')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('telefone')->nullable(false);
            $table->string('password')->nullable(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
