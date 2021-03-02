<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        $this->count++;
    }

    public function mount($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
    }
}
