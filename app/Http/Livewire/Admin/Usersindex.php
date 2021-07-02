<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class Usersindex extends Component
{
    public $searchuser;

    public function render()
    {
        $usuarios=User::where('name', 'LIKE', '%'. $this->searchuser .'%')->get();
        return view('livewire.admin.usersindex', compact('usuarios'));
    }

    public function borrar($id)
    {
        
        if ($id) {
            $record = User::where('id', $id);
            $record->delete();
        }
    }
}
