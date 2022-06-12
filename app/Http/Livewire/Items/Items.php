<?php

namespace App\Http\Livewire\Items;

use App\Models\AppSettings;
use App\Models\Item;
use Livewire\Component;

class Items extends Component
{
    public $info;
    public $items;

    public function mount()
    {
        $this->info = AppSettings::first();
        $this->items = Item::all();
    }
    public function render()
    {
        return view('livewire.items.items');
    }
}
