<div>
    <div>
        <p>@json($people)</p>
        <p>@json($cool_people)</p>
        <p>@json($not_so_cool_people)</p>
        <ul>
            @foreach($events as $event)
                <li>- {{ $event }}</li>
            @endforeach
        </ul>
    </div>
    <div class="mt-8 flex items-top justify-between space-x-16">
        <div class="flex-1">
            <h1 class="font-bold text-sm text-indigo-500">People</h1>
            <x-laravel-blade-sortable::sortable
                group="people"
                class="flex-1 space-y-2 bg-indigo-50 rounded p-2"
                name="people"
                wire:onSortOrderChange="handleOnSortOrderChanged"
                style="min-height:20rem;"
            >
                @foreach($people as $person)
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
                wire:onSortOrderChange="handleOnSortOrderChanged"
                style="min-height:20rem;"
            >
                @foreach($cool_people as $person)
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
            <h1 class="font-bold text-sm text-indigo-500">Not So Cool People</h1>
            <x-laravel-blade-sortable::sortable
                group="people"
                class="flex-1 space-y-2 bg-indigo-50 rounded p-2"
                name="not_so_cool_people"
                wire:onSortOrderChange="handleOnSortOrderChanged"
                style="min-height:20rem;"
            >
                @foreach($not_so_cool_people as $person)
                    <x-laravel-blade-sortable::sortable-item
                        sort-key="{{ $person }}"
                        class="rounded-lg bg-white p-4 shadow border flex items-center justify-between"
                    >
                        <span class="font-bold text-sm">{{ $person }}</span>
                    </x-laravel-blade-sortable::sortable-item>
                @endforeach
            </x-laravel-blade-sortable::sortable>
        </div>
    </div>
</div>
