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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->longText('descricao')->nullable();
            $table->decimal('valor', 10, 2);
            $table->decimal('estoque_disponivel', 10, 2)->default(0);
            $table->foreignId('id_subcategoria')
                    ->references('id')
                    ->on('subcategorias');
            $table->string('marca', 255)->nullable();
            $table->string('modelo', 255)->nullable();
            $table->string('linha', 255)->nullable();
            $table->string('cor', 255)->nullable();
            $table->string('tamanho', 255)->nullable();
            $table->string('material', 255)->nullable();
            $table->date('data_fabricacao')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->string('genero', 255)->nullable();
            $table->string('idade', 255)->nullable();
            $table->text('conteudo_embalagem')->nullable();
            $table->string('condicoes', 255)->nullable(); //novo ou usado
            $table->string('tamanhos', 255)->nullable();// Largura x Comprimento x Altura em cm
            $table->decimal('peso', 10, 2)->nullable(); //em gramas
            $table->integer('desconto')->default(0);
            $table->string('etiqueta', 255)->nullable();
            $table->boolean('ativo')->default(true);
            $table->longText('logs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
