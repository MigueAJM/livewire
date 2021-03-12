<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;
    public $name, $body, $post_id;
    public $action = 'store';

    protected $rules = [
        'name' => 'required',
        'body' => 'required'
    ];

    protected $validationAttributes = [
        'name' => 'Nombre',
        'body' => 'Descripción'
    ];

    protected $messages = [
        'name.required' => 'Por favor ingrese el nombre que es requerido'
    ];

    public function render()
    {
        $posts = Post::latest('id')->paginate(5);
        return view('livewire.post-component', compact('posts'));
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|max:10',
            'body' => 'required'
        ]);
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
        $this->validate();

        $post = Post::find($this->post_id);

        $post->update([
            'name' => $this->name,
            'body' => $this->body
        ]);
        $this->reset(['name', 'body', 'action', 'post_id']);
    }

    public function destroy(Post $post)
    {
        $post->delete();
    }

    public function default()
    {
        $this->reset(['name', 'body', 'action', 'post_id']);
    }
}
