<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Button extends Component
{
    public $variant;
    public $href;
    public $icon;
    public $label;
    public $badge;

    public function render()
    {
        return view('livewire.components.button');
    }
}
