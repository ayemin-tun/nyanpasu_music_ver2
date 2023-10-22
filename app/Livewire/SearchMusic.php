<?php

namespace App\Livewire;

use App\Models\Music;
use Livewire\Component;
use Livewire\WithPagination;

class SearchMusic extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage(); // Reset pagination when the search term changes
    }

    public function render()
    {
        $musics = Music::latest()
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(6);

        return view('livewire.search-music', compact('musics'));
    }
}
