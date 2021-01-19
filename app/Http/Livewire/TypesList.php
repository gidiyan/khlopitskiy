<?php

namespace App\Http\Livewire;

use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class TypesList extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 15;
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];

    public function render()
    {
        return view('livewire.types-list', [
            'types' => Type::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ]);
    }
}
