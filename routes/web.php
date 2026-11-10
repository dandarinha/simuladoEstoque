<?php

use App\Livewire\Fornecedor\FornecedorCreate;
use App\Livewire\Fornecedor\FornecedorEdit;
use App\Livewire\Fornecedor\FornecedorIndex;
use App\Livewire\Login\Login;
use App\Livewire\Material\MaterialCreate;
use App\Livewire\Material\MaterialEdit;
use App\Livewire\Material\MaterialIndex;
use App\Livewire\Movimentacao\MovimentacaoCreate;
use App\Livewire\Movimentacao\MovimentacaoIndex;
use Illuminate\Support\Facades\Route;


Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->group(function () {

    Route::get('/fornecedor', FornecedorIndex::class)->name('fornecedor.index');
    Route::get('/fornecedor/edit/$id', FornecedorEdit::class)->name('fornecedor.edit');
    Route::get('/fornecedor/create', FornecedorCreate::class)->name('fornecedor.create');

    Route::get('/material', MaterialIndex::class)->name('material.index');
    Route::get('/material/edit/$id', MaterialEdit::class)->name('material.edit');
    Route::get('/material/create', MaterialCreate::class)->name('material.create');

    Route::get('/movimentacao', MovimentacaoIndex::class)->name('movimentacao.index');
    Route::get('/movimentacao/create', MovimentacaoCreate::class)->name('movimentacao.create');

});
