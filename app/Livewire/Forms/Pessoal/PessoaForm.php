<?php

namespace App\Livewire\Forms\Pessoal;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PessoaForm extends Form
{
    public $codigoCliente = '';

    #[Rule('required', message: 'O campo nome tem que ser preenchido!')]
    public $nome = '';

    public $email = '';

    public $whatsapp = '';

    public $tipoCliente;
    public $tipoFuncionario;
    public $tipoFornecedor;

    public function save()
    {
        // $this->validate();

        User::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp,
            'tipo_cliente' => $this->tipoCliente,
            'tipo_funcionario' => $this->tipoFuncionario,
            'tipo_fornecedor' => $this->tipoFornecedor,
        ]);
    }
}
