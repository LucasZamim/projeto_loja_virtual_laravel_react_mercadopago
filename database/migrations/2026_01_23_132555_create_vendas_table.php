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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_comprador')
                ->references('id')
                ->on('users');
            $table->dateTime('data_venda');
            $table->decimal('valor_total', 10, 2);
            $table->decimal('desconto', 10, 2); // em R$
            $table->decimal('valor_final', 10, 2);
            $table->mediumText('link_nf')->nullable();
            $table->string('meio_envio', 100)->nullable(); //correios
            $table->string('codigo_rastreio', 255)->nullable();
            $table->string('link_rastreio', 255)->nullable();
            $table->mediumText('progresso_envio')->nullable(); //atualizações
            $table->text('endereco_envio')->nullable();
            $table->text('observacao_entrega')->nullable();
            $table->string('status', 25)->default('processando'); //(processando, pendente, pago, enviado, entregue, rma, cancelado)
            $table->boolean('ativo')->default(true);
            $table->string('payment_id', 255)->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->string('payment_type', 255)->nullable(); //credit_card | Visa
            $table->text('payment_status')->nullable();
            $table->text('payment_url')->nullable(); //externo ou link do boleto
            $table->text('payment_qr_code')->nullable();//qr-codigo
            $table->text('payment_qr_code_base64')->nullable();// qr
            $table->text('payment_boleto_url')->nullable(); //url boleto
            $table->text('payment_barcode')->nullable(); //boleto codigo de barras
            $table->string('payment_external_reference')->nullable();
            $table->longText('logs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
