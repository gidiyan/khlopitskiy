<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsList extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 15;
    public $sortField = 'name';
    public $sortAsc = true;
    public $selected = [];

    public function render()
    {
        return view('livewire.products-list', [
            'products' => Product::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage)
        ]);
    }
}
