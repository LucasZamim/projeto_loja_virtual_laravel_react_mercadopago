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
        Schema::create('galeria_produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_produto')
                    ->references('id')
                    ->on('produtos');
            $table->mediumText('link_imagem');
            $table->boolean('principal')->default(false);
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
        Schema::dropIfExists('galeria_produtos');
    }
};
