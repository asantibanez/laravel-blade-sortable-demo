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

    <h1 class="text-2xl text-indigo-500 font-medium">
        Laravel Blade Sortable Demos
    </h1>

    <div class="space-x-4">
        <a href="/examples/basic"
           class="bg-indigo-500 border rounded p-2 text-white">
            Basic
        </a>
        <a href="/examples/custom-component"
           class="bg-indigo-500 border rounded p-2 text-white">
            Custom Component
        </a>
        <a href="/examples/as-form-input"
           class="bg-indigo-500 border rounded p-2 text-white">
            As Form Input
        </a>
    </div>

</div>

</body>
</html>
