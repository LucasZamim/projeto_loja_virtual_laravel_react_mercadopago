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
        Schema::create('detalhe_vendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_venda')
                    ->references('id')
                    ->on('vendas');
            $table->foreignId('id_produto')
                    ->references('id')
                    ->on('produtos');
            $table->decimal('quantidade', 10, 2);
            $table->decimal('valor', 10, 2);
            $table->longText('logs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalhe_venda');
    }
};
