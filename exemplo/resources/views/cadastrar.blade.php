<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Aqui você cadastra Animais") }}

                    <form action="/cadastrar" method="post">
                        @csrf

                        <!-- Nome -->
                        <div>
                            <x-input-label for="name" :value="__('Nome')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Espécie -->
                        <div class="mt-4">
                            <x-input-label for="species" :value="__('Espécie')" />
                            <x-text-input id="species" class="block mt-1 w-full" type="text" name="species" :value="old('species')" required autocomplete="species" />
                            <x-input-error :messages="$errors->get('species')" class="mt-2" />
                        </div>

                        <!-- Idade -->
                        <div class="mt-4">
                            <x-input-label for="age" :value="__('Idade')" />
                            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autocomplete="age" />
                            <x-input-error :messages="$errors->get('age')" class="mt-2" />
                        </div>

                        <!-- Cor -->
                        <div class="mt-4">
                            <x-input-label for="color" :value="__('Cor')" />
                            <x-text-input id="color" class="block mt-1 w-full" type="text" name="color" :value="old('color')" autocomplete="color" />
                            <x-input-error :messages="$errors->get('color')" class="mt-2" />
                        </div>

                        <!-- Adotado -->
                        <div class="mt-4">
    <x-input-label for="is_adopted" :value="__('Adotado')" />
    <input id="is_adopted" type="checkbox" name="is_adopted" value="1" {{ old('is_adopted') ? 'checked' : '' }}>
    <x-input-error :messages="$errors->get('is_adopted')" class="mt-2" />
</div>

                        <!-- Data de Nascimento -->
                        <div class="mt-4">
                            <x-input-label for="date_of_birth" :value="__('Data de Nascimento')" />
                            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" autocomplete="date_of_birth" />
                            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Salvar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
