<x-admin.admin-layout>
    <x-slot name="header">
        <a class="px-2 btn-red btn-md" href="{{ route('admin.types.trashed') }}">Удаленные типы работ</a>
        <a class="px-2 btn-md btn-blue" href="{{ route('admin.types.create') }}">Добавить тип работ</a>
    </x-slot>
    <div class="main-card">
        <div class="body">
            <div class="w-full">
                @livewire('types-list')
            </div>
        </div>
    </div>
</x-admin.admin-layout>
