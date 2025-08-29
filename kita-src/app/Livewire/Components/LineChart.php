<?php

namespace App\Livewire\Components;

use Livewire\Component;

class LineChart extends Component
{
    /**
     * Sample values:
     */
    public $stacked = false;
    public $width = 250;
    public $height = 200;
    public $zoom = false;
    public $title = 'ABC Rate';
    public $fill = 'solid';
    public $category = [
        '20 Jan', 
        '30 Jan', 
        '29 Feb', 
        '21 Mar'
    ];
    public $markerFill = [
        "var(--color-card)"
    ];
    public $colors = [
        "var(--color-vix-1)", 
        "var(--color-vix-2)", 
        "var(--color-vix-3)"
    ];
    public $markerStroke = [
        "var(--color-vix-1)", 
        "var(--color-vix-2)", 
        "var(--color-vix-3)"
    ];
    public $series = [
        ['name' => 'Growth', 'data' => [34, 44, 54, 21]],
        ['name' => 'Revenue', 'data' => [12, 32, 45, 32]],
        ['name' => 'Profit', 'data' => [9, 22, 35, 44]],
    ];

    public function mount() 
    {
        $this->dispatch('line-loaded');
    }
    public function render()
    {
        return view('livewire.components.line-chart');
    }
}
