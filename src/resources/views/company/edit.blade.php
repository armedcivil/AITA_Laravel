<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                @if ($errors->any())
                    <div class="relative block w-full p-4 mb-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('company.update') }}">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="id" value="{{ $company->id }}"/>
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')"/>
                        <x-text-input id="name" name="name"
                            class="block mt-1 w-full" value="{{ $company->name }}"/>
                    </div>
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')"/>
                        <x-text-input id="email" name="email"
                            class="block mt-1 w-full" value="{{ $company->email }}"/>
                    </div>
                    {{-- <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')"/>
                        <x-text-input id="password" name="password" type="password"
                            class="block mt-1 w-full"/>
                    </div>
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Password Confirm')"/>
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                            class="block mt-1 w-full"/>
                    </div> --}}
                    <div class="flex justify-end">
                        <div class="flex justify-end mt-3 mx-4">
                            <a href="{{ route('company.show', [ 'id' => $company->id ]) }}" class="text-gray-400 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-900 focus:outline-none dark:focus:ring-gray-800">{{ __('Cancel') }}</a>
                        </div>
                        <x-primary-button class="mt-3">
                            {{ __('Save') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
