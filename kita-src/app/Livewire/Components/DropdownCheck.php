<?php

namespace App\Livewire\Components;

use Livewire\Component;

class DropdownCheck extends Component
{

    public string $label;
    public array $option = [];

    public function render()
    {
        return view('livewire.components.dropdown-check');
    }
}
