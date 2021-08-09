<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Privacycheck extends Component
{
    public function render()
    {
        return view('livewire.privacycheck');
    }

    public function verificacionCheck()
    {
        return redirect()->route('home');
    }
}
