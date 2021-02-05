@extends('layout')

@section('content')
    <p class="text-2xl text-indigo-500 font-medium">
        As Form Input Example
    </p>

    @if(request('sort_order'))
        <p>
            The submitted order is: @json(request('sort_order'))
        </p>
    @endif

    <form action="#" method="get">
        <x-laravel-blade-sortable::sortable
            as="div"
            class="space-y-4"
            name="sort_order" {{-- adding "name" creates a hidden input --}}
        >
            @foreach(request('sort_order', ['Batman', 'Robin', 'Batwoman', 'Red Hood', 'Nightwing']) as $batHero)
                <x-laravel-blade-sortable::sortable-item
                    as="div"
                    sort-key="{{ $batHero }}"
                    class="bg-white shadow-lg border rounded py-2 px-4"
                >
                    {{ $batHero }}
                </x-laravel-blade-sortable::sortable-item>
            @endforeach
        </x-laravel-blade-sortable::sortable>

        <button
            type="submit"
            class="bg-indigo-500 border rounded p-2 text-white mt-8"
        >
            Submit Order
        </button>

        <a
            href="/examples/as-form-input"
            class="inline-block bg-indigo-500 border rounded p-2 text-white mt-8"
        >
            Reset
        </a>
    </form>
@endsection
