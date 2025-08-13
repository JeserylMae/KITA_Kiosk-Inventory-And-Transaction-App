<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Autocomplete extends Component
{
    public string $label;
    public string $name;
    public string $placeholder;
    public array $options;
    public string $class;
    public string $badge;

    public function __construct(
        string $label = '',
        string $name = 'autocomplete',
        string $placeholder = '',
        array $options = [],
        string $class = '',
        string $badge = ''
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->options = $options;
        $this->class = $class;
        $this->badge = $badge;
    }

    public function render()
    {
        return view('livewire.components.autocomplete');
    }
}