<div>
    {{-- <div class="mx-2">

        <form class="w-full font-semibold rounded-lg  text-sm text-gray-700 bg-white dark:text-white dark:bg-gray-800">
            <div class="px-1 py-5">
                <div class="flex flex-col sm:flex-row gap-3 w-full px-3">
                    <label class="uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                        <x-inputs.label for="codigo" value="{{ __('Código') }}" />

                        <x-inputs.input-text wire:model="form.codigo" class="w-12 text-center" disabled />

                    </label>

                    <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                        <x-inputs.label for="name" value="{{ __('Nome') }}" />

                        <x-inputs.input-text wire:model="form.name" class="max-w-96" />

                        @error('form.name')
                            <span class="error dark:text-red-500">{{ $message }}</span>
                        @enderror
                    </label>

                    <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                        <x-inputs.label for="email" value="{{ __('Email') }}" />

                        <x-inputs.input-text wire:model="form.email" class="w-full sm:w-96" />

                        @error('form.email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </label>

                    <label class="flex flex-col uppercase tracking-wide font-bold mb-2">
                        <x-inputs.label for="telefone" value="{{ __('Telefone') }}" />

                        <x-inputs.input-text wire:model="form.numero" class="w-full sm:w-60" />

                        @error('form.whatsapp')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </label>

                </div>

                <div class="flex flex-col sm:flex-row flex-wrap w-full gap-2 px-3">


                    <div class="flex items-end gap-2 sm:gap-3">
                        <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                            <x-inputs.label for="dtNascimento" value="{{ __('Data Nascimento') }}" />

                            <x-inputs.input-text type="date" wire:model="form.dataNascimento" class="w-36 sm:w-40" />

                            @error('form.dataNascimento')
                                <span class="error dark:text-red-500">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                            <x-inputs.label for="dtCadastro" value="{{ __('Data Cadastro') }}" />

                            <x-inputs.input-text type="date" wire:model="form.dataCadastro" class="w-36 sm:w-40" />

                            @error('form.dataCadastro')
                                <span class="error dark:text-red-500">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div> --}}

    <div class="flex flex-col items-start gap-5 mx-2 md:flex-row">

        <div class="w-full px-2 py-5 rounded-md shadow-md bg-white md:w-2/3 dark:bg-gray-800">

            <form class="font-semibold text-sm text-gray-700 dark:text-white">
                <div class="px-1 py-2">
                    <div class="flex flex-col flex-wrap sm:flex-row gap-5 w-full px-3">
                        <label class="uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                            <x-inputs.label for="codigo" value="{{ __('Código') }}" />

                            <x-inputs.input-text wire:model="form.codigo" class="w-12 text-center" disabled />

                        </label>

                        <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                            <x-inputs.label for="name" value="{{ __('Nome') }}" />

                            <x-inputs.input-text wire:model="form.name" class="max-w-96" />

                            @error('form.name')
                                <span class="error dark:text-red-500">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                            <x-inputs.label for="email" value="{{ __('Email') }}" />

                            <x-inputs.input-text wire:model="form.email" class="w-full sm:w-72" />

                            @error('form.email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="flex flex-col uppercase tracking-wide font-bold mb-2">
                            <x-inputs.label for="telefone" value="{{ __('Telefone') }}" />

                            <x-inputs.input-text wire:model="form.numero" class="w-full sm:w-44" />

                            @error('form.whatsapp')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                            <x-inputs.label for="dtNascimento" value="{{ __('Data Nascimento') }}" />

                            <x-inputs.input-text type="date" wire:model="form.dataNascimento" class="w-36 sm:w-40" />

                            @error('form.dataNascimento')
                                <span class="error dark:text-red-500">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="flex flex-col uppercase tracking-wide font-bold mb-2" for="grid-first-name">
                            <x-inputs.label for="dtCadastro" value="{{ __('Data Cadastro') }}" />

                            <x-inputs.input-text type="date" wire:model="form.dataCadastro" class="w-36 sm:w-40" />

                            @error('form.dataCadastro')
                                <span class="error dark:text-red-500">{{ $message }}</span>
                            @enderror
                        </label>

                    </div>
                </div>
            </form>

        </div>


        <div class="w-full h-auto px-8 py-10 rounded-md shadow-md bg-white md:w-1/2 dark:bg-gray-800">
            <div
                class="flex justify-between py-4 text-md tracking-widest font-semibold uppercase text-gray-600 border-b">
                <span>total: </span>
            </div>

        </div>

    </div>
</div>
