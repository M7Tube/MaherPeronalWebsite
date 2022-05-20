<?php

namespace App\Http\Livewire\HomePage;

use App\Models\AppSettings;
use Livewire\Component;

class HomePage extends Component
{
    public $info;

    public function mount()
    {
        $this->info = AppSettings::first();
    }

    public function render()
    {
        return view('livewire.home-page.home-page');
    }
}
