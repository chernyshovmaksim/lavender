<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;

class Tags extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire.tags', [
            'tags' => Tag::query()->where('title', 'LIKE', "%{$this->search}%")->get(),
        ]);
    }
}
