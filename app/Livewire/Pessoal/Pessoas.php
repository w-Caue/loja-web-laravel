<?php

namespace App\Livewire\Pessoal;

use App\Livewire\Forms\Pessoal\PessoaForm;
use Livewire\Component;

class Pessoas extends Component
{
    public PessoaForm $form;

    public $search = '';

    public $pessoa;

    public $codigoPessoa;

    protected $listeners = [
        'delete'
    ];

    // public function show(Pessoa $pessoa)
    // {
    //     $this->codigoPessoa = $pessoa->id;
    //     $this->pesquisaPessoa($pessoa);
    // }

    // public function pesquisaPessoa($pessoa)
    // {
    //     $this->pessoa = Pessoa::where('id', '=', $pessoa->id)->get()->first();
    // }


    public function closeModal()
    {
        $this->resetValidation();
        $this->dispatch('close-modal');
    }

    public function save()
    {
        $this->form->save();

        $this->dispatch('close-modal');

        $this->alert('success', 'Cadastro Realizado', [
            'position' => 'center',
            'timer' => 2000,
            'toast' => false,
            'text' => 'com sucesso',
        ]);

        $this->js('window.location.reload()');
    }

    public function render()
    {
        return view('livewire.pessoal.pessoas');
    }
}
