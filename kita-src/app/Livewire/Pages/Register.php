<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.app')]
#[Title('Kita | Register')]
class Register extends Component
{
    public $states = [
        '',
    ];

    public function render()
    {
        return view('livewire.pages.register');
    }
}
