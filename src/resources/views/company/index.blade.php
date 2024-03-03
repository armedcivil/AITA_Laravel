<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-90">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <div class="flex justify-end mt-4 mx-4">
                    <a href="{{ route('company.create') }}" class="text-gray-400 bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-900 focus:outline-none dark:focus:ring-gray-800">{{ __('Create') }}</a>
                </div>
                <div>
                    <table class="table-auto w-full h-3/4">
                        <thead>
                            <th>{{__('ID')}}</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Email')}}</th>
                        </thead>
                        <tbody>
                            @foreach ($companies->all() as $company)
                                <tr>
                                    <td class="border px-6 py-2 text-center">
                                        <a href="{{ route('company.show', ['id' => $company->id]) }}" class="text-blue-500">{{ $company->id }}</a>
                                    </td>
                                    <td class="border px-6 py-2 text-center">{{ $company->name }}</td>
                                    <td class="border px-6 py-2 text-center">{{ $company->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-5">
                    {{ $companies->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
