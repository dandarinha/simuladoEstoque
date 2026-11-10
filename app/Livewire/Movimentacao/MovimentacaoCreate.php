<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
use Livewire\Component;

class MovimentacaoCreate extends Component
{
    public $material_id;
    public $user_id;
    public $fornecedor_id;
    public $tipo_mov;
    public $qtd_movimentada;
    public $data;

    public function create()
    {
        Movimentacao::create([
            'material_id' => $this->material_id,
            'user_id' => $this->user_id,
            'fornecedor_id' => $this->fornecedor_id,
            'tipo_mov' => $this->tipo_mov,
            'qtd_movimentada' => $this->qtd_movimentada,
            'data' => $this->data
        ]);

        session()->flash(
            'success',
            'Movimentação cadastrada com sucesso!'
        );

        return redirect()->route('movimentacao.index');
    }

    public function render()
    {
        return view('livewire.movimentacao.movimentacao-create');
    }
}
