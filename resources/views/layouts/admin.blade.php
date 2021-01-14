@extends('layouts.master')
@section('styles')
    @include('layouts.partials.admin._styles')
    @livewireStyles
@endsection

@section('body')
    <div class="flex h-screen bg-gray-200">
        <x-admin.sidebar></x-admin.sidebar>
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="main-header">
                {{ $header }}
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="mx-auto px-6 py-8">
                    @if(session('message'))
                        <div class="alert success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if($errors->count() > 0)
                        <div class="alert danger">
                            <ul class="list-none">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{ $slot }}

                </div>
            </main>
        </div>
    </div>
@endsection

@push('scripts')
    @include('layouts.partials.admin._scripts')
@endpush
@livewireScripts
