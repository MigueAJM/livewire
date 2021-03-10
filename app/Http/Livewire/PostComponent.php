<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostComponent extends Component
{
    public $name, $body;

    public function render()
    {
        $posts = Post::latest('id')->get();
        return view('livewire.post-component', compact('posts'));
    }

    public function store(){
        Post::create([
            'name' => $this->name,
            'body' => $this->body
        ]);

        $this->reset(['name','body']);
    }
}
