<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $values = [1, 2, 3, 4, 5];
    public $index = 0;
    public $log = '';

    public function setIndex($index)
    {
        $this->index = $index;
    }

    public function updated($property)
    {
        $this->log .= $property . "<br />";
    }

    public function render()
    {
        return view('livewire.test');
    }
}
