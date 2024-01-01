<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class ShowNotes extends Component
{
    /**
     * @return View
     */
    public function render()
    {
        return view(
            'livewire.show-notes',
            ['notes' => Note::orderBy('created_at', 'desc')->paginate()]
        );
    }
}
