<?php

namespace App\Livewire\Fornecedor;

use Livewire\Component;

class FornecedorIndex extends Component
{
  
    public function render()
    {
        return view('livewire.fornecedor.fornecedor-index', compact('fornecedores'));
    }
}
