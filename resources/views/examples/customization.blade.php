@extends('layout')

@section('content')
    <p class="text-2xl text-indigo-500 font-medium">
        Customization Example
    </p>

    <x-laravel-blade-sortable::sortable
        animation="1000"
        ghost-class="opacity-25"
    >
        <x-laravel-blade-sortable::sortable-item
            class="rounded-lg bg-white p-4 shadow border"
        >
            1
        </x-laravel-blade-sortable::sortable-item>
        <x-laravel-blade-sortable::sortable-item
            class="rounded-lg bg-white p-4 shadow border"
        >
            2
        </x-laravel-blade-sortable::sortable-item>
        <x-laravel-blade-sortable::sortable-item
            class="rounded-lg bg-white p-4 shadow border"
        >
            3
        </x-laravel-blade-sortable::sortable-item>
    </x-laravel-blade-sortable::sortable>
@endsection
