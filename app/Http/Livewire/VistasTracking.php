<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\VistasTracking as VT;

class VistasTracking extends Component
{
//    public $title;
//
//
//    public function mount($nombre)
//    {
//        $this->title = $nombre;
//    }
    public function render()
    {
        $vistas = VT::all();
        return view('livewire.vistas-tracking', compact('vistas'))
            ->layout('layouts.base');
    }
}
