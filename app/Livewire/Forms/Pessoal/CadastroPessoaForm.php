<?php

namespace App\Livewire\Forms\Pessoal;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CadastroPessoaForm extends Form
{
    public $codigo;
    public $nome = '';
    public $nomeContato;
    public $email;
    public $whatsapp;
    public $dataNascimento;
    public $dataCadastro;
    public $tipoCliente;
    public $tipoFuncionario;
    public $tipoFornecedor;

    public function pessoa($codigo)
    {
        $pessoa = User::where('id', '=', $codigo)->get()->first();

        // dd($pessoa);

        $this->codigo = $pessoa->id;
        // $this->nome = $pessoa->nome;
        // $this->nomeContato = $pessoa->nome_contato;
        // $this->email = $pessoa->email;
        // $this->whatsapp = $pessoa->whatsapp;
        // $this->dataNascimento = date('Y-m-d', strtotime($pessoa->data_nascimento));
        // $this->dataCadastro = date('Y-m-d', strtotime($pessoa->created_at));
        // $this->tipoCliente = $pessoa->tipo_cliente;
        // $this->tipoFuncionario = $pessoa->tipo_funcionario;
        // $this->tipoFornecedor = $pessoa->tipo_fornecedor;
    }
}
