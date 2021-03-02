<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Paises extends Component
{
    public $paises = ['Perú', 'Argentina', 'Chile', 'México'];
    public $pais;
    public function render()
    {
        return view('livewire.paises');
    }

    public function save()
    {
        array_push($this->paises, $this->pais);
        $this->reset('pais');
    }
} 
