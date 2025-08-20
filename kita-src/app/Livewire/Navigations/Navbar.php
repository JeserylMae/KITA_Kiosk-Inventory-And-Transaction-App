<?php

namespace App\Livewire\Navigations;

use Livewire\Component;

class Navbar extends Component
{
    public $currentPage = 'home';

    public function setActiveLink($link)
    {
        $this->currentPage = $link;
    }

    public function render()
    {
        return view('livewire.navigations.navbar');
    }
}
