<?php

namespace App\Http\Livewire\Post;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{

    public function render()
    {
        return view('livewire.post.post', [
            'post' => ModelsPost::where('post_id',request('id'))->first(),
        ]);
    }
}
