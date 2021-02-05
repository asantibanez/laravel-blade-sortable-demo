@extends('layout')

@section('content')
    <x-laravel-blade-sortable::sortable
        as="div"
    >
        <x-laravel-blade-sortable::sortable-item as="div" data-sort-key="jason">
            Jason
        </x-laravel-blade-sortable::sortable-item>
        <x-laravel-blade-sortable::sortable-item as="div" data-sort-key="andres">
            Andres
        </x-laravel-blade-sortable::sortable-item>
        <x-laravel-blade-sortable::sortable-item as="div" data-sort-key="matt">
            Matt
        </x-laravel-blade-sortable::sortable-item>
        <x-laravel-blade-sortable::sortable-item as="div" data-sort-key="james">
            James
        </x-laravel-blade-sortable::sortable-item>
    </x-laravel-blade-sortable::sortable>
@endsection
