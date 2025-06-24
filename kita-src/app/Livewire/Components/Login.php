<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('livewire.layout.app')]
#[Title('Login | Kita')]
class Login extends Component
{
    public bool $terms = false;
    public bool $isDisabled = true;

    public function termsAccepted() 
    {
        if ($this->terms) {
            return $this->isDisabled = false;
        }
        return $this->isDisabled = true;
    }
    
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
