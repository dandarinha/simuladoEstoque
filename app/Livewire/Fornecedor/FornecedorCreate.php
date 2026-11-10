<?php

namespace App\Livewire\Fornecedor;

use App\Models\Fornecedor;
use Livewire\Component;

class FornecedorCreate extends Component
{
    public $razao_social;
    public $cnpj_cpf;
    public $telefone;
    public $endereco;
    public $email;

    public function create()
    {
        Fornecedor::create([
            'razao_social' => $this->razao_social,
            'cnpj_cpf' => $this->cnpj_cpf,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
            'email' => $this->email
        ]);

        session()->flash(
        'success',
        'Fornecedor cadastrado com sucesso!'
    );

    return redirect()->route('fornecedor.index');
    }

    public function render()
    {
        return view('livewire.fornecedor.fornecedor-create');
    }
}
