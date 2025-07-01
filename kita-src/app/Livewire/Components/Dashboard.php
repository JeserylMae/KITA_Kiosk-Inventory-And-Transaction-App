<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Livewire\Layouts\GeneralSettings;


#[Layout('layouts.app')]
#[Title('Kita')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.components.dashboard')
             ->layoutData(GeneralSettings::layoutData());
    }
}
