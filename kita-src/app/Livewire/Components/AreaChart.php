<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AreaChart extends Component
{
    public $width = 200;
    public $height = 200;
    public $enableLabel = false;
    public $name = "";
    public $title = "";
    public $subtitle = "";
    public $data = [];
    public $category = [];
    public $zoom = false;
    public $xLegendAlign = 'left';
    public $class;
    public $xshowLabel = true;
    public $yshowLabel = true;

    public function mount($category) 
    {
        $this->category = $category;

        $this->dispatch('area-loaded');
    }

    public function render()
    {
        return view('livewire.components.area-chart');
    }
}
