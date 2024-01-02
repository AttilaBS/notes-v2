<?php

namespace App\Livewire;

use App\Models\Note;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ShowNoteDetails extends Component
{
    public Note $note;

    public function mount(Note $note): void
    {
        $this->note = $note;
    }

    public function render(): View
    {
        return view('livewire.show-note-details');
    }
}
