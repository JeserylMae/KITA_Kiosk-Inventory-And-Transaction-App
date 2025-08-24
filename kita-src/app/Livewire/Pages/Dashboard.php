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
