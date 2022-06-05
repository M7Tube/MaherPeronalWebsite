<?php

namespace App\Http\Livewire\Dashboard\Posts;

use App\Http\Traits\LivewireDashboardTrait;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\Component;

class CreatePost extends Component
{
    use LivewireDashboardTrait;
    use WithFileUploads;

    public $post_id;
    public $main_title;
    public $title;
    public $body;
    public $picture;
    public $keywords;
    public $user_id;

    public $message;

    public function mount()
    {
        $this->user_id = auth()->id();
    }
    public function updatedPicture()
    {
        $time = Carbon::now();
        $this->validate([
            'picture' => ['required', 'mimes:jpg,png,jpeg'],
        ]);
        $this->picture->storeAs('img', $this->picture->getClientOriginalName());
    }

    public function create()
    {
        $this->livewire_create(
            [
                'main_title' => ['required', 'string', 'max:144'],
                'title' => ['required', 'string', 'max:144'],
                'body' => ['required', 'string', 'max:1044'],
                'picture' => ['required', 'mimes:jpg,png,jpeg'],
                'keywords' => ['required', 'string', 'max:864'],
            ],
            'App\Models\Post',
            [
                'main_title',
                'title',
                'body',
                'picture',
                'keywords',
                'user_id',
            ],
            'Post Created Successfully',
            'Created'
        );
        return redirect()->route('Posts', app()->getLocale());
    }

    public function clear()
    {
        $this->livewire_clear([
            'main_title',
            'title',
            'body',
            'picture',
            'keywords',
            'user_id',
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.posts.create-post');
    }
}
