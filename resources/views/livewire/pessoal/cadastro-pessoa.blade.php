<div>
    <div class="mx-2">
        {{-- <div class=" rounded-tr-lg bg-white dark:bg-gray-800">
            <button wire:click="update()"
                class="m-2 w-20 gap-2 text-white font-semibold border p-2 rounded-md bg-blue-500 transition-all duration-300 hover:scale-95 hover:bg-purple-600 dark:border-none">
                Salvar
            </button>
        </div> --}}
        <form class="w-full font-semibold rounded-b-lg  text-sm text-gray-700 bg-white dark:text-white dark:bg-gray-800">
            <div>
                <div class="flex justify-between flex-wrap gap-2 px-3 py-3">

                    <label class="uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                        <p>Código {{ $form->codigo }}</p>

                        <x-inputs.input-text wire:model="form.codigo" class="w-12" disabled />

                    </label>


                </div>

                <div class="flex flex-col sm:flex-row gap-3 w-full px-3">
                    <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                        <span>Nome</span>

                        <x-input wire:model="form.nome" class="w-full sm:w-96"></x-input>

                        @error('form.nome')
                            <span class="error dark:text-red-500">{{ $message }}</span>
                        @enderror
                    </label>

                    <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                        <span>Nome P/ Contato</span>

                        <x-input wire:model="form.nomeContato" class="w-full sm:w-64"></x-input>

                        @error('form.nomeContato')
                            <span class="error dark:text-red-500">{{ $message }}</span>
                        @enderror
                    </label>

                </div>

                <div class="flex flex-col sm:flex-row flex-wrap w-full gap-2 px-3">
                    <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                        <span>Email</span>

                        <x-input wire:model="form.email" class="w-full sm:w-96"></x-input>

                        @error('form.email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </label>

                    <div class="flex items-end gap-2 sm:gap-3">
                        <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                            <span>Data Nascimento</span>

                            <x-input wire:model="form.dataNascimento" class="w-36 sm:w-40" type="date"></x-input>

                            @error('form.dataNascimento')
                                <span class="error dark:text-red-500">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                            <span>Data Cadastro</span>

                            <x-input wire:model="form.dataCadastro" class="w-36 sm:w-40" type="date"
                                disabled></x-input>

                            @error('form.dataCadastro')
                                <span class="error dark:text-red-500">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 px-3">
                    <label class="flex flex-col uppercase tracking-wide font-bold mb-2">
                        <span>Whatsapp</span>

                        <x-input wire:model="form.whatsapp" class="w-full sm:w-60"></x-input>

                        @error('form.whatsapp')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </label>
                </div>
            </div>
        </form>
    </div>
</div>
