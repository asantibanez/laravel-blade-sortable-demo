<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Blade Sortable Demo</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="mx-auto container py-8 space-y-8">

    <div>
        <x-laravel-blade-sortable::sortable
            as="div"
            name="sorting"
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
    </div>

    <div>
        <x-laravel-blade-sortable::sortable
            component="custom-ul"
            name="sorting"
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
    </div>

</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

<x-laravel-blade-sortable::scripts/>

<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
