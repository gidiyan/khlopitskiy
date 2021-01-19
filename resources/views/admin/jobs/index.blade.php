<x-admin.admin-layout>
    <x-slot name="header">
        <a class="px-2 btn-red btn-md" href="{{ route('admin.jobs.trashed') }}">Удаленные работы</a>
        <a class="px-2 btn-md btn-blue" href="{{ route('admin.jobs.create') }}">Добавить работу</a>
    </x-slot>
    <div class="main-card">
        <div class="body">
            <div class="w-full">
                @livewire('jobs-list')
            </div>
        </div>
    </div>
</x-admin.admin-layout>
