@extends('layout')

@section('content')
    <p class="text-2xl text-indigo-500 font-medium">
        Drag and Drop Nested Example
    </p>

    @json(request()->all())

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
                            class="rounded-lg bg-white p-4 shadow border items-center justify-between"
                        >
                            <span class="font-bold text-sm">{{ $person }}</span>

                            <x-laravel-blade-sortable::sortable
                                group="people"
                                class="space-y-2 bg-indigo-50 rounded p-2"
                                name="{{$person }}_people"
                                style="min-height:4rem;"
                            />
                        </x-laravel-blade-sortable::sortable-item>
                    @endforeach
                </x-laravel-blade-sortable::sortable>
            </div>
        </div>
    </form>
@endsection
