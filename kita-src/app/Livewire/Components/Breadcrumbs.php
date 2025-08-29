<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Breadcrumbs extends Component
{
    public $paths;
    
    public function render()
    {
        return view('livewire.components.breadcrumbs');
    }
}
