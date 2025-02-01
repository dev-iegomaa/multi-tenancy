<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full border-collapse border border-gray-300 dark:border-gray-600 rounded-lg shadow-md">
                        <thead class="bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                        <tr>
                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">#</th>
                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Name</th>
                            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Email</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800">
                        @foreach($users as $user)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $user->id }}</td>
                                <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $user->name }}</td>
                                <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $user->email }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
