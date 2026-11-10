<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fornecedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'razao_social',
        'cnpj_cpf',
        'telefone',
        'endereco',
        'email'
    ];

     public function material(): HasMany
    {
        return $this->hasMany(Material::class);
    }

     public function movimentacao(): HasMany
    {
        return $this->hasMany(Movimentacao::class);
    }
}
