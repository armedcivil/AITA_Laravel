<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full table-auto">
                        <tbody>
                            <tr>
                                <td class="w-48">
                                    <span>{{ __('ID') }}</span>
                                </td>
                                <td>
                                    <span>{{ $company->id }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-48">
                                    <span>{{ __('Name') }}</span>
                                </td>
                                <td>
                                    <span>{{ $company->name }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-48">
                                    <span>{{ __('Email') }}</span>
                                </td>
                                <td>
                                    <span>{{ $company->email }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="flex justify-end mt-3 mx-4">
                        <a href="{{ route('company.index') }}" class="text-gray-400 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-900 focus:outline-none dark:focus:ring-gray-800">{{ __('Cancel') }}</a>
                        <a href="{{ route('company.edit', [ 'id' => $company->id ]) }}" class="text-gray-400 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-900 focus:outline-none dark:focus:ring-gray-800 ml-4">{{ __('Edit') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
