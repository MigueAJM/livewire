<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostComponent extends Component
{
    public $name, $body, $post_id;
    public $action = 'store';

    public function render()
    {
        $posts = Post::latest('id')->get();
        return view('livewire.post-component', compact('posts'));
    }

    public function store()
    {
        Post::create([
            'name' => $this->name,
            'body' => $this->body
        ]);

        $this->reset(['name','body']);
    }

    public function edit(Post $post)
    {
        $this->name = $post->name;
        $this->body = $post->body;
        $this->post_id = $post->id;

        $this->action = 'update';
    }

    public function update()
    {
        $post = Post::find($this->post_id);

        $post->update([
            'name' => $this->name,
            'body' => $this->body
        ]);
        $this->reset(['name', 'body', 'action', 'post_id']);
    }

    public function default()
    {
        $this->reset(['name', 'body', 'action', 'post_id']);
    }
}
