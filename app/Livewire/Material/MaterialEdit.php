<?php

namespace App\Livewire\Material;

use App\Models\Material;
use Livewire\Component;

class MaterialEdit extends Component
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

    public function mount($id)
    {
        $material = Material::find($id);
        $this->material = $material->material;
        $this->descricao = $material->descricao;
        $this->marca = $material->marca;
        $this->categoria = $material->categoria;
        $this->unidade = $material->unidade;
        $this->preco_custo = $material->preco_custo;
        $this->preco_venda = $material->preco_venda;
        $this->qtd_disponivel = $material->qtd_disponivel;
        $this->estoque_min = $material->estoque_min;
        $this->fornecedor_id = $material->fornecedor_id;
    }

    public function update()
    {
        $material = Material::find();
        $material->material = $this->material;
        $material->descricao = $this->descricao;
        $material->marca = $this->marca;
        $material->categoria = $this->categoria;
        $material->unidade = $this->unidade;
        $material->preco_custo = $this->preco_custo;
        $material->preco_venda = $this->preco_venda;
        $material->qtd_disponivel = $this->qtd_disponivel;
        $material->estoque_min = $this->estoque_min;
        $material->fornecedor_id = $this->fornecedor_id;
        $material->save();

        session()->flash(
            'success',
            'Material editado com sucesso!'
        );

        return redirect()->route('material.index');
    }

    public function render()
    {
        return view('livewire.material.material-edit');
    }
}
