<div>

    <div x-data="{ list: 'aluno' }" class="">
        <button :class="{ 'active font-bold text-white bg-white rounded-t dark:bg-gray-800': list === 'aluno' }"
            class="py-2 px-4 font-semibold" x-on:click="list = 'aluno'">
            Alunos
        </button>

        <button :class="{ 'active font-bold text-white bg-white rounded-t dark:bg-gray-800': list === 'funcionario' }"
            class="py-2 px-4 font-semibold" x-on:click="list = 'funcionario'">
            Funcionarios
        </button>

        <div class="bg-gray-50 rounded-b-lg dark:bg-gray-800" x-show=" list === 'funcionario'">
            @livewire('Pessoal.ListagemPessoas')
        </div>

        <div class="bg-gray-50 rounded-b-lg dark:bg-gray-800" x-show=" list === 'aluno'">
            @livewire('Aluno.ListagemAlunos')
        </div>
    </div>

    <x-modal.modal-md title="Novo Cadastro">
        @slot('body')
            <div class="flex flex-col gap-3 mt-7">
                <x-inputs.input-label class="block" value="{{ __('Nome') }}" type="text" name="nome" required
                    autocomplete="nome" autofocus/>

                <x-inputs.input-label class="block" value="{{ __('Email') }}" type="email" name="email" required
                    autocomplete="email" />
            </div>
        @endslot
    </x-modal.modal-md>
</div>
