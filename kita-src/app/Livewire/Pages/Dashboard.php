<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Carbon\Carbon;

#[Layout('livewire.layout.app')]
#[Title('Dashboard')]

class Dashboard extends Component
{
    public $greeting;
    public $revenue = 0.00;
    public $profit = 0.00;
    public $sales = 0.00;
    public $data = [
        // [ 'product' => 'Chips', 'brand' => 'ABC', 'expiry_date' => '2025-10-01', 'quantity' => 20, 'days_until_expiry' => '38 days' ],
        // [ 'product' => 'Soda', 'brand' => 'XYZ', 'expiry_date' => '2025-12-15', 'quantity' => 50, 'days_until_expiry' => '113 days' ],
        // [ 'product' => 'Cookies', 'brand' => 'SweetBite', 'expiry_date' => '2025-09-30', 'quantity' => 15, 'days_until_expiry' => '37 days' ],
        // [ 'product' => 'Juice', 'brand' => 'FreshCo', 'expiry_date' => '2025-11-20', 'quantity' => 30, 'days_until_expiry' => '88 days' ],
        // [ 'product' => 'Candy', 'brand' => 'SugarRush', 'expiry_date' => '2026-01-05', 'quantity' => 100, 'days_until_expiry' => '134 days' ],
    ];


    public function mount()
    {
        $hour = Carbon::now('Asia/Manila')->hour;
        $time = '';

        if ($hour < 12) {
            $time = 'morning';
        } elseif ($hour < 18) {
            $time = 'afternoon';
        } else {
            $time= 'evening';
        }

        $username = Auth::user()->first_name;
        $this->greeting = "Good {$time}, {$username} 🪴";
    }

    public function render()
    {
        return view('livewire.pages.dashboard');
    }
}
