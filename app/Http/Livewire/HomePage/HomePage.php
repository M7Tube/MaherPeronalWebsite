<?php

namespace App\Http\Livewire\HomePage;

use App\Models\AppSettings;
use App\Models\Services;
use App\Models\Statistics;
use Livewire\Component;

class HomePage extends Component
{
    public $info;
    public $services;
    public $statistics;

    public function mount()
    {
        $this->info = AppSettings::first();
        $this->services = Services::all()->take(6);
        $this->statistics = Statistics::first();
    }

    public function render()
    {
        return view('livewire.home-page.home-page');
    }
}
