@extends('layout')

@section('content')
    <p class="text-2xl text-indigo-500 font-medium">
        Custom Component Example
    </p>

    <x-laravel-blade-sortable::sortable
        component="custom-ul" {{-- just set your component name here --}}
    >
        <x-laravel-blade-sortable::sortable-item
            component="custom-li" {{-- here too if needed --}}
            avatar="https://randomuser.me/api/portraits/men/32.jpg"
            name="Andres Santibanez"
            class="cursor-move"
            email="andres@family.com"
            sort-key="andres"
        />
        <x-laravel-blade-sortable::sortable-item
            component="custom-li"
            avatar="https://randomuser.me/api/portraits/women/63.jpg"
            name="Pamela Ochoa"
            class="cursor-move"
            email="pamela@family.com"
            sort-key="pamela"
        />
        <x-laravel-blade-sortable::sortable-item
            component="custom-li"
            avatar="https://randomuser.me/api/portraits/women/44.jpg"
            name="Sara Santibanez"
            class="cursor-move"
            email="sara@family.com"
            sort-key="sara"
        />
        <x-laravel-blade-sortable::sortable-item
            component="custom-li"
            avatar="https://randomuser.me/api/portraits/men/34.jpg"
            name="Bruno Santibanez"
            class="cursor-move"
            email="bruno@family.com"
            sort-key="bruno"
        />
    </x-laravel-blade-sortable::sortable>
@endsection
