<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;


#[Layout('livewire.layout.app')]
#[Title('Sign Up | Kita')]
class Register extends Component
{
    public function landingRedirect() 
    {
        return redirect()->to('/');
    }

    private function layoutData() 
    {
        return [
            'bgImgUrl' => asset('assets/bg-landing.jpeg')
        ];
    }

    public function render()
    {
        return view('livewire.components.register')
             ->layoutData($this->layoutData());
    }
}
