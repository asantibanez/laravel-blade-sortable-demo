@extends('layout')

@section('content')
    <p class="text-2xl text-indigo-500 font-medium">
        Disable Drop and Sort
    </p>

    <div class="mt-8 flex items-top justify-between space-x-16">
        <div class="flex-1">
            <h1 class="font-bold text-sm text-indigo-500">
                Disable Drop
            </h1>
            <x-laravel-blade-sortable::sortable
                group="people"
                class="flex-1 space-y-2 bg-indigo-50 rounded p-2"
                :allow-drop="false"
                style="min-height:20rem;"
            >
                @foreach(['Andres', 'Eric', 'Paul', 'Yaz', 'Jacob', 'Michael', 'Jason'] as $person)
                    <x-laravel-blade-sortable::sortable-item
                        sort-key="{{ $person }}"
                        class="rounded-lg bg-white p-4 shadow border flex items-center justify-between"
                    >
                        <span class="font-bold text-sm">{{ $person }}</span>
                    </x-laravel-blade-sortable::sortable-item>
                @endforeach
            </x-laravel-blade-sortable::sortable>
        </div>

        <div class="flex-1">
            <h1 class="font-bold text-sm text-indigo-500">
                Disable Sort
            </h1>
            <x-laravel-blade-sortable::sortable
                group="people"
                class="flex-1 space-y-2 bg-indigo-50 rounded p-2"
                :allow-sort="false"
                style="min-height:20rem;"
            />
        </div>
    </div>
@endsection
