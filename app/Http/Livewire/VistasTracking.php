<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\VistasTracking as VT;

class VistasTracking extends Component
{
    public $busqueda = '';
//
//
//    public function mount($nombre)
//    {
//        $this->title = $nombre;
//    }
    public function render()
    {
        $vistas = VT::where(
            'title', 'like','%'.$this->busqueda . '%'
        )
            ->orWhere(
                'description', 'like','%'.$this->busqueda . '%'
            )
        ->get();
        return view('livewire.vistas-tracking', compact('vistas'))
            ->layout('layouts.base');
    }
}
