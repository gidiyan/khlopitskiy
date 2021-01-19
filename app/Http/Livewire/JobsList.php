<?php

namespace App\Http\Livewire;

use App\Models\Job;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class JobsList extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 15;
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];

    public function render()
    {
        return view('livewire.jobs-list', [
            'jobs' => Job::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
            'types' =>Type::all()
        ]);
    }
}
