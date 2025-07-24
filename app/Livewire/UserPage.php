<?php

namespace App\Livewire;

use Livewire\Component;

class UserPage extends Component
{
    #[Component('layouts.app')]
    public function render()
    {
        return view('livewire.user-page');
    }
}
