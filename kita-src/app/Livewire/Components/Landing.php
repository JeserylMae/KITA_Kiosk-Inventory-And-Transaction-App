<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

use function Livewire\Volt\layout;

#[Layout('livewire.layout.app')]
#[Title('Kita')]
class Landing extends Component
{
    public function layoutData() 
    {
        return [
            'bgImgUrl' => asset('/assets/bg-landing.jpeg'),
        ];
    }

    public function render()
    {
        return view('livewire.components.landing')
             ->layoutData($this->layoutData());
    }
}
