<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.app')]
#[Title('Kita')]

class Landing extends Component
{
    public function render()
    {
        return view('livewire.components.landing');
    }
}
