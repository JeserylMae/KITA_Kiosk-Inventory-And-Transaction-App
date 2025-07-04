<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Livewire\Layouts\GeneralSettings;


#[Layout('livewire.layout.app')]
#[Title('Sign Up | Kita')]
class Register extends Component
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

    public function render()
    {
        return view('livewire.components.register')
             ->layoutData(GeneralSettings::layoutData());
    }
}
