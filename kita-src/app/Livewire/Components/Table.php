<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Table extends Component
{
    public array $headers = [];
    public array $rows = [];
    
    public function render()
    {
        return view('livewire.components.table');
    }
}
