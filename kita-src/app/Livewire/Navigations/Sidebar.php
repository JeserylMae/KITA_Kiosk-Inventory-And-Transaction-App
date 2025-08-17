<?php

namespace App\Livewire\Navigations;

use Livewire\Component;

class Sidebar extends Component
{
    public $currentPage;

    public function setActiveButton($button)
    {
        $this->currentPage = $button;
    }

    public function render()
    {
        return view('livewire.navigations.sidebar');
    }
}
