<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Material extends Model
{
    use HasFactory;
    protected $fillable = [
        'material',
        'descricao',
        'marca',
        'categoria',
        'unidade',
        'preco_custo',
        'preco_venda',
        'qtd_disponivel',
        'estoque_min',
        'fornecedor_id'
    ];

    public function fornecedor(): BelongsTo
    {
        return $this->belongsTo(Fornecedor::class);
    }

    public function movimentacao(): HasMany
    {
        return $this->hasMany(Movimentacao::class);
    }
}
