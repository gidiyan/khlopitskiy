<x-admin.admin-layout>
    <x-slot name="header">
            <a class="px-2 btn-red btn-md" href="{{ route('admin.products.trashed') }}">Удаленные проекты</a>
            <a class="px-2 btn-md btn-blue" href="{{ route('admin.products.create') }}">Добавить проект</a>
    </x-slot>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Список проектов') }}
    </h2>
    <div class="main-card">
        <div class="body">
            <div class="w-full">
                @livewire('products-list')
            </div>
        </div>
    </div>
</x-admin.admin-layout>

