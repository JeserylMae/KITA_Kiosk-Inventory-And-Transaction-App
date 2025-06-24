<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('livewire.layout.app')]
#[Title('Login | Kita')]
class Login extends Component
{    
    public function landingRedirect() 
    {
        return redirect()->to('/');
    }
    
    public function render()
    {
        return view('livewire.components.login')
        ->layoutData($this->layoutData());
    }

    private function layoutData() 
    {
        return [
            'bgImgUrl' => asset('assets/bg-landing.jpeg')
        ];
    }
}
