<?php

namespace App\Livewire\Components;

use Livewire\Component;

// Sample usage:
// <livewire:components.table
//     :headers="['Product', 
//         'Brand', 
//         'Quantity', 
//         'Category', 
//         'Purchase Price', 
//         'Selling Price', 
//         'Expiry'
//     ]"
//     :rows="[
//         ['Ice Cream', 'ABC', '230', 'Food', '₱ 4,3432.34', '₱ 45.00', 'Jan 25, 2027'],
//         ['Bread', 'ABC', '21', 'Food', '₱ 432.34', '₱ 50.00', 'Jan 25, 2027'],
//         ['Ice Cream', 'ABC', '230', 'Food', '₱ 4,3432.34', '₱ 45.00', 'Jan 25, 2027'],
//     ]"
//     empty="No items were invoiced in this time frame."
// />

class Table extends Component
{
    public array $headers = [];
    public array $rows = [];
    public string $empty;
    
    public function render()
    {
        return view('livewire.components.table');
    }
}
