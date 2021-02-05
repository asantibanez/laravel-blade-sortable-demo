@extends('layout')

@section('content')
    <p class="text-2xl text-indigo-500 font-medium">
        Drag and Drop Example
    </p>

    <div class="flex items-top justify-between space-x-16">
        <x-laravel-blade-sortable::sortable
            group="people"
            class="flex-1 space-y-2"
        >
            @foreach(['Andres', 'Eric', 'Paul'] as $person)
                <x-laravel-blade-sortable::sortable-item
                    class="rounded-lg bg-white p-4 shadow border flex items-center justify-between"
                >
                    <span class="font-bold text-sm">{{ $person }}</span>
                </x-laravel-blade-sortable::sortable-item>
            @endforeach
        </x-laravel-blade-sortable::sortable>

        <x-laravel-blade-sortable::sortable
            group="people"
            class="flex-1 space-y-2"
        >
            @foreach(['Jason', 'Yaz', 'Jacob'] as $person)
                <x-laravel-blade-sortable::sortable-item
                    class="rounded-lg bg-white p-4 shadow border flex items-center justify-between"
                >
                    <span class="font-bold text-sm">{{ $person }}</span>
                </x-laravel-blade-sortable::sortable-item>
            @endforeach
        </x-laravel-blade-sortable::sortable>
    </div>

@endsection
