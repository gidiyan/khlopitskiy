<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoriesList extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 15;
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];
    public function render()
    {
        return view('livewire.categories-list', [
            'categories' => Category::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ]);
    }
}
