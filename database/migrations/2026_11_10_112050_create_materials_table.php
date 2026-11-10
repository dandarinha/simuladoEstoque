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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->text('descricao')->nullable();
            $table->string('marca');
            $table->string('categoria');
            $table->string('unidade');
            $table->decimal('preco_custo', 10,2);
            $table->decimal('preco_venda', 10,2);
            $table->unsignedInteger('qtd_disponivel')->default(0);
            $table->unsignedInteger('estoque_min');
            $table->foreignId('fornecedor_id')->constrained('fornecedors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
