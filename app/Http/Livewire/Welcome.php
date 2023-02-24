<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $count = 0;

    public function increaseCount()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.welcome');
    }
}
