<?php

namespace App\View\Components\views;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class landing extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function loginRedirect() 
    {
        return redirect('/login');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.views.landing');
    }
}
