@extends('layout')

@section('content')
    <p class="text-2xl text-indigo-500 font-medium">
        Basic Example
    </p>

    <x-laravel-blade-sortable::sortable
        as="div"
    >
        <x-laravel-blade-sortable::sortable-item
            as="div"
            sort-key="jason" {{-- this is important. set a key for each entry --}}
        >
            Jason
        </x-laravel-blade-sortable::sortable-item>
        <x-laravel-blade-sortable::sortable-item
            as="div"
            sort-key="andres"
        >
            Andres
        </x-laravel-blade-sortable::sortable-item>
        <x-laravel-blade-sortable::sortable-item
            as="div"
            sort-key="matt"
        >
            Matt
        </x-laravel-blade-sortable::sortable-item>
        <x-laravel-blade-sortable::sortable-item
            as="div"
            sort-key="james"
        >
            James
        </x-laravel-blade-sortable::sortable-item>
    </x-laravel-blade-sortable::sortable>
@endsection
