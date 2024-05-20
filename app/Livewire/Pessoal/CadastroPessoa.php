<?php

namespace App\Livewire\Pessoal;

use App\Livewire\Forms\Pessoal\CadastroPessoaForm;
use App\Models\User;
use Livewire\Component;

class CadastroPessoa extends Component
{
    public CadastroPessoaForm $form;

    public $pessoa;

    public function mount($codigo)
    {
        $this->form->pessoa($codigo);

        // dd($this->pessoa);
    }

    public function update()
    {
        // $this->form->update();

        $this->alert('success', 'Cadastro Atualizado', [
            'position' => 'center',
            'timer' => 2000,
            'toast' => false,
            'text' => 'com sucesso',
        ]);
    }

    public function render()
    {
        return view('livewire.pessoal.cadastro-pessoa');
    }
}
