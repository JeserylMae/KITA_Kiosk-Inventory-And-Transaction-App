<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('livewire.layout.app')]
#[Title('Inventory')]
class Inventory extends Component
{
    public $class;
    
    public function render()
    {
        return view('livewire.pages.inventory');
    }
}
