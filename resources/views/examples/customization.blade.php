@extends('layout')

@section('content')
    <p class="text-2xl text-indigo-500 font-medium">
        Customization Example
    </p>

    <x-laravel-blade-sortable::sortable
        animation="1000"
        ghost-class="opacity-25"
        drag-handle="drag-handle"
    >
        <x-laravel-blade-sortable::sortable-item
            sort-key="item-1"
            class="rounded-lg bg-white p-4 shadow border flex items-center justify-between"
        >
            <span class="font-bold text-sm">Item 1</span>
            <span class="cursor-move drag-handle text-indigo-500 text-xs">Drag Here</span>
        </x-laravel-blade-sortable::sortable-item>
        <x-laravel-blade-sortable::sortable-item
            sort-key="item-2"
            class="rounded-lg bg-white p-4 shadow border flex items-center justify-between"
        >
            <span class="font-bold text-sm">Item 2</span>
            <span class="cursor-move drag-handle text-indigo-500 text-xs">Drag Here</span>
        </x-laravel-blade-sortable::sortable-item>
        <x-laravel-blade-sortable::sortable-item
            sort-key="item-3"
            class="rounded-lg bg-white p-4 shadow border flex items-center justify-between"
        >
            <span class="font-bold text-sm">Item 3</span>
            <span class="cursor-move drag-handle text-indigo-500 text-xs">Drag Here</span>
        </x-laravel-blade-sortable::sortable-item>
    </x-laravel-blade-sortable::sortable>
@endsection
