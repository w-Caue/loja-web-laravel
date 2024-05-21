<?php

namespace App\Livewire\Forms\Pessoal;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CadastroPessoaForm extends Form
{
    public $codigo;
    public $name = '';
    public $email;
    public $whatsapp;
    public $dataNascimento;
    public $dataCadastro;
    public $tipoCliente;
    public $tipoFuncionario;
    public $tipoFornecedor;

    public function pessoa($codigo)
    {
        $pessoa = User::where('id', '=', $codigo)
            ->leftjoin('information_users', 'information_users.user_id', '=', 'users.id')
            ->get()->first();

        // dd($pessoa);

        $this->codigo = $pessoa->id;
        $this->name = $pessoa->name;
        $this->email = $pessoa->email;
        $this->whatsapp = $pessoa->numero;
        $this->dataNascimento = date('Y-m-d', strtotime($pessoa->data_nascimento));
        $this->dataCadastro = date('Y-m-d', strtotime($pessoa->created_at));
    }
}
