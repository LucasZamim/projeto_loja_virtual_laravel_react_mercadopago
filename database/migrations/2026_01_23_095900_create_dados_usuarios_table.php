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
        Schema::create('dados_usuarios', function (Blueprint $table) {
            $table->id();
             $table->foreignId('id_usuario')
                    ->references('id')
                    ->on('users');
            $table->string('endereco_tipo', 100)->nullable();
            $table->string('endereco_rua', 255)->nullable();
            $table->string('endereco_numero', 30)->nullable();
            $table->string('endereco_bairro', 255)->nullable();
            $table->string('endereco_complemento', 255)->nullable();
            $table->string('endereco_referencia', 255)->nullable();
            $table->string('endereco_cidade', 255)->nullable();
            $table->string('endereco_cep', 10)->nullable();
            $table->foreignId('endereco_id_estado')
                    ->references('id')
                    ->on('estados');
            $table->longText('logs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dados_usuarios');
    }
};
