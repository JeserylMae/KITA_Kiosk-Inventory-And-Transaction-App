<?php

namespace App\Livewire\Layouts;

class GeneralSettings
{
    private function __construct()
    {
        // Constructor logic if needed
    }

    public static function layoutData()
    {
        return [
            'bgImgUrl' => asset('assets/bg-landing.jpeg'),
        ];
    }
}