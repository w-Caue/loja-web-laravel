<div>

    <div x-data="{ list: 'aluno' }" class="">
        <div class="flex gap-2">
            <button :class="{ 'active font-bold text-white bg-white hover:scale-100 dark:bg-gray-800': list === 'aluno' }"
                class="py-2 px-4 font-semibold text-gray-600 border border-b-0 rounded-t hover:scale-90 hover:text-white transition-all duration-100 dark:border-gray-800"
                x-on:click="list = 'aluno'">
                Alunos
            </button>

            <button :class="{ 'active font-bold text-white bg-white hover:scale-100 dark:bg-gray-800': list === 'professores' }"
                class="py-2 px-4 font-semibold text-gray-600 border border-b-0 rounded-t hover:scale-90 hover:text-white transition-all duration-100 dark:border-gray-800"
                x-on:click="list = 'professores'">
                Professores
            </button>

            <button :class="{ 'active font-bold text-white bg-white hover:scale-100 dark:bg-gray-800': list === 'funcionario' }"
                class="py-2 px-4 font-semibold text-gray-600 border border-b-0 rounded-t hover:scale-90 hover:text-white transition-all duration-100 dark:border-gray-800"
                x-on:click="list = 'funcionario'">
                Funcionarios
            </button>
        </div>

        <div class="bg-gray-50 rounded-b-lg rounded-tr-lg dark:bg-gray-800" x-show=" list === 'aluno'">
            @livewire('Aluno.ListagemAlunos')
        </div>

        <div class="bg-gray-50 rounded-b-lg rounded-tr-lg dark:bg-gray-800" x-show=" list === 'funcionario'">
            @livewire('Pessoal.ListagemPessoas')
        </div>
    </div>

    <x-modal.modal-md title="Novo Cadastro">
        @slot('body')
            <div class="flex flex-col gap-3 mt-7">
                <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                    <x-inputs.label for="name" value="{{ __('Nome') }}" />

                    <x-inputs.input-text wire:model="form.name" class="mt-1" />

                    @error('form.name')
                        <span class="error dark:text-red-500">{{ $message }}</span>
                    @enderror
                </label>

                <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                    <x-inputs.label for="email" value="{{ __('Email') }}" />

                    <x-inputs.input-text wire:model="form.email" class="mt-1" />

                    @error('form.email')
                        <span class="error dark:text-red-500">{{ $message }}</span>
                    @enderror
                </label>

            </div>
        @endslot
    </x-modal.modal-md>
</div>
