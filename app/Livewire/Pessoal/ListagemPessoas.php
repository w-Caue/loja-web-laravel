<?php

namespace App\Livewire\Pessoal;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListagemPessoas extends Component
{
    // use LivewireAlert;

    use WithPagination;

    public $pessoa;

    public $pesquisa;

    public $readyLoad = false;

    #Filtros
    public $sortField = 'Nome';

    protected $listeners = [
        'delete'
    ];

    public function sortFilter($field)
    {
        // if ($this->sortField === $field) {
        //     $this->sortAsc = !$this->sortAsc;
        // } else {
        //     $this->sortAsc = true;
        // }
        $this->sortField = $field;
    }

    public function load()
    {
        $this->readyLoad = true;
    }

    public function dados()
    {
        $pessoas = User::select(
            [
                'users.id',
                'users.name',
                'users.email',
                'users.type',
                'users.created_at',
                'information_users.numero',
                // 'information_users.status',
            ]
        )
            ->leftjoin('information_users', 'information_users.user_id', '=', 'users.id');
        #Filtros
        // ->when($this->pesquisa, function ($query) {
        //     $filter = strtolower($this->sortField);
        //     return $query->where($filter, 'like', "%" . $this->pesquisa . "%");
        // });

        // $this->dispatch('close-modalfilter');

        return $pessoas->paginate(5);
    }

    // public function remover(Pessoa $pessoa)
    // {
    //     $this->pessoa = $pessoa;
    //     $this->alert('info', 'Deletar esse Cadastro?', [
    //         'position' => 'center',
    //         'timer' => 5000,
    //         'toast' => false,
    //         'showConfirmButton' => true,
    //         'confirmButtonColor' => '#d33',
    //         'onConfirmed' => 'delete',
    //         'showCancelButton' => true,
    //         'cancelButtonColor' => '#3085d6',
    //         'onDismissed' => '',
    //         'cancelButtonText' => 'Cancelar',
    //         'confirmButtonText' => 'Deletar',
    //     ]);
    // }

    // public function delete()
    // {

    //     Pessoa::where('id', $this->pessoa->id)->update([
    //         'status' => 'Deletado'
    //     ]);

    //     $this->alert('success', 'Cadastro Deletado!', [
    //         'position' => 'center',
    //         'timer' => '1000',
    //         'toast' => false,
    //     ]);
    // }

    public function render()
    {

        return view('livewire.pessoal.listagem-pessoas', [
            'pessoas' => $this->readyLoad ? $this->dados() : [],
        ]);
    }
}
