<?php

namespace App\Livewire\Fornecedor;

use App\Models\Fornecedor;
use Livewire\Component;

class FornecedorEdit extends Component
{
    public $razao_social;
    public $cnpj_cpf;
    public $telefone;
    public $endereco;
    public $email;

    public function mount($id)
    {
        $fornecedor = Fornecedor::find($id);
        $this->razao_social = $fornecedor->razao_social;
        $this->cnpj_cpf = $fornecedor->cnpj_cpf;
        $this->telefone = $fornecedor->telefone;
        $this->endereco = $fornecedor->endereco;
        $this->email = $fornecedor->email;
    }

    public function update()
    {
        $fornecedor = Fornecedor::find();
        $fornecedor->razao_social =  $this->razao_social;
        $fornecedor->cnpj_cpf = $this->cnpj_cpf;
        $fornecedor->telefone = $this->telefone;
        $fornecedor->endereco =  $this->endereco;
        $fornecedor->email = $this->email;
        $fornecedor->save();

        session()->flash(
            'success',
            'Fornecedor editado com sucesso!'
        );

        return redirect()->route('fornecedor.index');
    }

    public function render()
    {
        return view('livewire.fornecedor.fornecedor-edit');
    }
}
