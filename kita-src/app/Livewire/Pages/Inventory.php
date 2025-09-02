<?php

namespace App\Livewire\Pages;

use App\View\Components\button;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('livewire.layout.app')]
#[Title('Inventory')]
class Inventory extends Component
{
    public $class;
    public $activeTabButton = 'products';
    protected $listeners = ['switchTab'];

    public function switchTab($button)
    {
        $this->activeTabButton = $button;
    }
    
    public function render()
    {
        return view('livewire.pages.inventory');
    }
}
