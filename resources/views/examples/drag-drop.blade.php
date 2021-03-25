@extends('layout')

@section('content')
    <p class="text-2xl text-indigo-500 font-medium">
        Drag and Drop Example
    </p>

    @if(request('people'))
        <p>Submitted people[]: @json(request('people'))</p>
    @endif
    @if(request('cool_people'))
        <p>Submitted cool_people[]: @json(request('cool_people'))</p>
    @endif
    @if(request('not_so_cool_people'))
        <p>Submitted not_so_cool_people[]: @json(request('not_so_cool_people'))</p>
    @endif

    <form>
        <button
            class="bg-indigo-500 border rounded-lg p-2 text-white text-sm"
        >
            Submit
        </button>

        <div class="mt-8 flex items-top justify-between space-x-16">
            <div class="flex-1">
                <h1 class="font-bold text-sm text-indigo-500">People</h1>
                <x-laravel-blade-sortable::sortable
                    group="people"
                    class="flex-1 space-y-2 bg-indigo-50 rounded p-2"
                    name="people"
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
                <h1 class="font-bold text-sm text-indigo-500">Cool People</h1>
                <x-laravel-blade-sortable::sortable
                    group="people"
                    class="flex-1 space-y-2 bg-indigo-50 rounded p-2"
                    name="cool_people"
                    style="min-height:20rem;"
                />
            </div>

            <div class="flex-1">
                <h1 class="font-bold text-sm text-indigo-500">Not So Cool People</h1>
                <x-laravel-blade-sortable::sortable
                    group="people"
                    class="flex-1 space-y-2 bg-indigo-50 rounded p-2"
                    name="not_so_cool_people"
                    style="min-height:20rem;"
                />
            </div>
        </div>
    </form>
@endsection
