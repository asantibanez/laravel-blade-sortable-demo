
<div class="space-y-8">
    <button
        type="button"
        wire:click="addPerson"
        class="bg-indigo-500 text-white border rounded-lg py-2 px-3 text-sm"
    >
        Add Person
    </button>

    <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                    Email
                </th>
            </tr>
            </thead>
            <x-laravel-blade-sortable::sortable
                component="custom-tbody"
                class="bg-white divide-y divide-gray-200"
                wire:onSortOrderChange="handleSortOrderChange"
            >
                @foreach($people as $index => $person)
                    <x-laravel-blade-sortable::sortable-item
                        as="tr"
                        wire:key="{{ $person['id'] }}"
                        sort-key="{{ $person['id'] }}"
                    >
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <input
                                type="text"
                                class="border rounded px-4 py-2 shadow w-full"
                                placeholder="First Name"
                                wire:model.lazy="people.{{ $index }}.first_name"
                            />
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <input
                                type="text"
                                class="border rounded px-4 py-2 shadow w-full"
                                placeholder="Last Name"
                                wire:model.lazy="people.{{ $index }}.last_name"
                            />
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <input
                                type="email"
                                class="border rounded px-4 py-2 shadow w-full"
                                placeholder="Email"
                                wire:model.lazy="people.{{ $index }}.email"
                            />
                        </td>
                    </x-laravel-blade-sortable::sortable-item>
                @endforeach
            </x-laravel-blade-sortable::sortable>
        </table>
    </div>
</div>
