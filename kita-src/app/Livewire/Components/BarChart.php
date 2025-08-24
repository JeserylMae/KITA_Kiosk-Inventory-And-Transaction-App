<?php

namespace App\Livewire\Components;

use Livewire\Component;

class BarChart extends Component
{
    /**
     * Sample values.
     */
    public $width = 0;
    public $height = 350;
    public $category = [
        'Feb', 'Mar', 'Apr', 
        'May', 'Jun', 'Jul'
    ];
    public $colors = [
        "var(--color-vix-1)",
        "var(--color-vix-3)",
        "var(--color-vix-2)"
    ];
    public $series = [
        ['name' => 'Net Profit', 'data' => [44, 55, 57, 56, 61, 58]],
        ['name' => 'Revenue', 'data' => [76, 85, 101, 98, 87, 105]],
        ['name' => 'Free Cash Flow', 'data' => [35, 41, 36, 26, 45, 48]]
    ];
    public function mount() 
    {
        $this->dispatch('bar-loaded');
    }

    public function render()
    {
        return view('livewire.components.bar-chart');
    }
}
