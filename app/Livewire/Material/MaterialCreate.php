<?php

namespace App\Livewire\Material;

use App\Models\Material;
use Livewire\Component;

class MaterialCreate extends Component
{
    public $material;
    public $descricao;
    public $marca;
    public $categoria;
    public $unidade;
    public $preco_custo;
    public $preco_venda;
    public $qtd_disponivel;
    public $estoque_min;
    public $fornecedor_id;

    public function create()
    {
        Material::create([
            'material' => $this->material,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria' => $this->categoria,
            'unidade' => $this->unidade,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'qtd_disponivel' => $this->qtd_disponivel,
            'estoque_min' => $this->estoque_min,
            'fornecedor_id' => $this->fornecedor_id
        ]);

        session()->flash(
        'success',
        'Material cadastrado com sucesso!'
    );

    return redirect()->route('material.index');
    }

    public function render()
    {
        return view('livewire.material.material-create');
    }
}
