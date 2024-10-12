<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Cancel - Nebulacore')]
class CancelPage extends Component
{
    public function render()
    {
        return view('livewire.cancel-page');
    }
}
