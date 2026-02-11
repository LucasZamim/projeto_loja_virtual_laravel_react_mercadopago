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
        Schema::create('estoques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_produto')
                    ->references('id')
                    ->on('produtos');
            $table->decimal('quantidade', 10, 2);
            $table->string('nf', 255)->nullable();
            $table->date('data_compra')->nullable();
            $table->date('data_entrada_estoque')->nullable();
            $table->text('local_estoque')->nullable();
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
        Schema::dropIfExists('estoques');
    }
};
