<?php

namespace App\Http\Livewire;

use Faker\Generator;
use Livewire\Component;
use Ramsey\Uuid\Uuid;

class SortableForm extends Component
{
    public $people = [];

    public function mount()
    {
        $this->addPerson();
        $this->addPerson();
        $this->addPerson();
        $this->addPerson();
    }

    public function addPerson()
    {
        $faker = app(Generator::class);

        $this->people = collect($this->people)
            ->push([
                'id' => Uuid::uuid4()->toString(),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->safeEmail,
            ])
            ->toArray();
    }

    public function handleSortOrderChange($sortOrder)
    {
        $currentPeople = collect($this->people);

        $this->people = collect($sortOrder)
            ->map(function ($id) use ($currentPeople) {
                return $currentPeople->firstWhere('id', $id);
            })
            ->toArray();
    }

    public function render()
    {
        return view('livewire.sortable-form');
    }
}
