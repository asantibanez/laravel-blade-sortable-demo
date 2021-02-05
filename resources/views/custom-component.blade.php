@extends('layout')

@section('content')
    <x-laravel-blade-sortable::sortable
        component="custom-ul"
    >
        <x-laravel-blade-sortable::sortable-item
            component="custom-li"
            avatar="https://randomuser.me/api/portraits/men/32.jpg"
            name="Andres Santibanez"
            class="cursor-move"
            email="andres@family.com"
            data-sort-key="andres"
        />
        <x-laravel-blade-sortable::sortable-item
            component="custom-li"
            avatar="https://randomuser.me/api/portraits/women/63.jpg"
            name="Pamela Ochoa"
            class="cursor-move"
            email="pamela@family.com"
            data-sort-key="pamela"
        />
        <x-laravel-blade-sortable::sortable-item
            component="custom-li"
            avatar="https://randomuser.me/api/portraits/women/44.jpg"
            name="Sara Santibanez"
            class="cursor-move"
            email="sara@family.com"
            data-sort-key="sara"
        />
        <x-laravel-blade-sortable::sortable-item
            component="custom-li"
            avatar="https://randomuser.me/api/portraits/men/34.jpg"
            name="Bruno Santibanez"
            class="cursor-move"
            email="bruno@family.com"
            data-sort-key="bruno"
        />
    </x-laravel-blade-sortable::sortable>
@endsection
