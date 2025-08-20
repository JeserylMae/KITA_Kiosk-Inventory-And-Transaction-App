<?php

namespace App\Livewire\Navigations;

use Livewire\Component;

class Navbar extends Component
{
    public $currentLink = 'home';

    public function setActiveLink($link)
    {
        $this->currentLink = $link;
    }

    public function render()
    {
        return view('livewire.navigations.navbar');
    }
}
