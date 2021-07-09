<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto ml-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-700 dark sm:rounded-lg">
                <div class="p-6 bg-white border-gray-200 dark:bg-gray-700 dark">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
