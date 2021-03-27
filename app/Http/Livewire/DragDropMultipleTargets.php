<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DragDropMultipleTargets extends Component
{
    public $people = ['Andres', 'Eric', 'Paul', 'Yaz', 'Jacob', 'Michael', 'Jason'];
    public $cool_people = [];
    public $not_so_cool_people = [];

    public $events = [];

    public function handleOnSortOrderChanged($sortOrder, $previousSortOrder, $name, $from, $to)
    {
        $this->$name = $sortOrder;

        $this->events = collect($this->events)
            ->push("{$name}. Dragged from $from to $to. Previous:" . collect($previousSortOrder)->join(','))
            ->toArray();
    }

    public function render()
    {
        return view('livewire.drag-drop-multiple-targets');
    }
}
