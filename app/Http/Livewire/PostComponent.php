<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostComponent extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.post-component', compact('posts'));
    }
}
