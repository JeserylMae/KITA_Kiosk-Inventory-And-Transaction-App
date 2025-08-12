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

    public function __construct(
        string $label = '',
        string $name = 'autocomplete',
        string $placeholder = '',
        array $options = [],
        string $class = ''
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->options = $options;
        $this->class = $class;
    }

    public function render()
    {
        return view('livewire.components.autocomplete');
    }
}