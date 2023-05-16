<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\VistasTracking as VT;
use function PHPUnit\Framework\lessThanOrEqual;

class VistasTracking extends Component
{
    public $busqueda = '';

    public $sort = 'id';
    public $direction = 'desc';


//
//
//    public function mount($nombre)
//    {
//        $this->title = $nombre;
//    }
    public function render()
    {
        $vistas = VT::where(
            'title', 'like', '%' . $this->busqueda . '%'
        )
            ->orWhere(
                'description', 'like', '%' . $this->busqueda . '%'
            )
            ->orderBy($this->sort, $this->direction)
            ->get();
        return view('livewire.vistas-tracking', compact('vistas'))
            ->layout('layouts.base');
    }

    public function order($param)
    {
        if ($this->sort === $param){
            if ($this->direction == 'desc'){
                $this->direction = 'asc';
            }else{
                $this->direction = 'desc';
            }
        }
        else{
            $this->sort = $param;
            $this->direction = 'asc';
        }



    }
}
