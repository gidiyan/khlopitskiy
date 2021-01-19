<x-admin.admin-layout>
    <x-slot name="header">
        <a class="px-2 btn-red btn-md" href="{{ route('admin.brands.trashed') }}">Удаленные ЖК</a>
        <a class="px-2 btn-md btn-blue" href="{{ route('admin.brands.create') }}">Добавить ЖК</a>
    </x-slot>
    <div class="main-card">
        <div class="body">
            <div class="w-full">
                @livewire('brands-list')
            </div>
        </div>
    </div>
</x-admin.admin-layout>
