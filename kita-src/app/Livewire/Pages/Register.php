<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.auth')]
#[Title('Kita | Register')]
class Register extends Component
{
    public $barangays = [ '', 'San Mateo', 'Poblacion', 'San Mariano' ];
    public $cities = [ 'San Pascual', 'Bolbok', 'Sta. Rita' ];
    public $states = [ 'Batangas', 'Laguna', 'Quezon'];

    public function render()
    {
        return view('livewire.pages.register');
    }
}
