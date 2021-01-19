<x-admin.admin-layout>
    <x-slot name="header">
        <a class="px-2 btn-red btn-md" href="{{ route('admin.categories.trashed') }}">Удаленные категории</a>
        <a class="px-2 btn-md btn-blue" href="{{ route('admin.categories.create') }}">Добавить категорию</a>
    </x-slot>
    <div class="main-card">
        <div class="body">
            <div class="w-full">
                @livewire('categories-list')
            </div>
        </div>
    </div>
</x-admin.admin-layout>
