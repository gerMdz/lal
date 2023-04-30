<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alpine extends Component
{
    public $count = 0;
    public $open = false;

    public function incrementar() {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.alpine');
    }
}
