<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class ShowNotes extends Component
{
    public function render(): View
    {
        return view(
            'livewire.show-notes',
            ['notes' => Note::orderBy('created_at', 'desc')->paginate(25)]
        );
    }
}
