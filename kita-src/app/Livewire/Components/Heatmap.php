<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Heatmap extends Component
{
    public $height = 300;
    public $title = '';
    public $ranges = [
        [ 'from' => 0, 'to' => 0, 'name' => 'Out-of-Stock', 'color' => '#E2E8F0' ],
        [ 'from' => 1, 'to' => 20, 'name' => 'Low Stocks', 'color' => "#D8F999" ],
        [ 'from' => 21, 'to' => 45, 'name' => 'Normal', 'color' => "#9AE600" ],
        [ 'from' => 46, 'to' => 55, 'name' => 'Overstock', 'color' => "#5EA500" ]
    ];
    public $series = [
        [ 'name' => 'Jan', 'data' => [34, 34, 5, 2, 5, 15, 4, 4, 10, 30, 12, 0, 21, 23, 34, 12, 23, 12, 0, 2, 23, 12, 12, 2, 12, 45, 23, 53, 23, 23] ],
        [ 'name' => 'Feb', 'data' => [55, 34, 23, 23, 12, 45, 2, 4, 45, 23, 34, 34, 5, 2, 5, 15, 4, 4, 10, 30] ],
        [ 'name' => 'Mar', 'data' => [12, 35, 12, 12, 22, 43, 34, 21, 23, 34, 55, 34, 23, 23, 12, 45, 2, 4, 45, 23] ],
        [ 'name' => 'Apr', 'data' => [12, 0, 21, 23, 34, 12, 23, 12, 0, 2, 12, 45, 5, 3, 6, 23, 54, 12, 5, 32] ],
        [ 'name' => 'May', 'data' => [12, 45, 5, 3, 6, 23, 54, 12, 5, 32, 23, 12, 12, 2, 12, 45, 23, 53, 23, 23] ],
        [ 'name' => 'Jun', 'data' => [23, 12, 12, 2, 12, 45, 23, 53, 23, 23, 23, 12, 12, 2, 12, 45, 23, 53, 23, 23] ],
        [ 'name' => 'Jul', 'data' => [12, 2, 21, 12, 14, 12, 1] ]
    ];

    public function mount() 
    {
        $this->dispatch('heatmap-loaded');
    }

    public function render()
    {
        return view('livewire.components.heatmap');
    }
}
