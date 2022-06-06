<?php

namespace App\Http\Livewire\Dashboard\Items;

use Livewire\WithFileUploads;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Item;
use Livewire\Component;

class EditItems extends Component
{
    use LivewireDashboardTrait;
    use WithFileUploads;

    public $item_id;
    public $ar_name;
    public $en_name;
    public $ar_desc;
    public $en_desc;
    public $oldpicture;
    public $picture;
    public $user_id;

    public $message;

    public function mount()
    {
        $this->item_id = request('id');
        $data = Item::find($this->item_id);
        if ($data) {
            $this->ar_name = $data->ar_name;
            $this->en_name = $data->en_name;
            $this->ar_desc = $data->ar_desc;
            $this->oldpicture = $data->picture;
            $this->en_desc = $data->en_desc;
        } else {
        }
    }

    public function updatedPicture()
    {
        $this->validate([
            'picture' => ['mimes:jpg,png,jpeg'],
        ]);
        $this->picture->storeAs('img/', $this->picture->getClientOriginalName());
    }

    public function edit()
    {
        $this->validate([
            'ar_name' => ['required', 'string', 'max:144'],
            'en_name' => ['required', 'string', 'max:144'],
            'ar_desc' => ['required', 'string', 'max:1044'],
            'en_desc' => ['required', 'string', 'max:1044'],
        ]);
        $data = Item::where('item_id', $this->item_id)->first();
        if ($data) {
            $data->ar_name = $this->ar_name;
            $data->en_name = $this->en_name;
            $data->ar_desc = $this->ar_desc;
            if (!$this->picture) {
                $data->picture = $this->oldpicture;
            } else {
                $data->picture = $this->picture->getClientOriginalName();
            }
            $data->en_desc = $this->en_desc;
            $data->save();
            return redirect()->route('Items', app()->getLocale());
        } else {
        }
    }

    public function delete()
    {
        Item::where('item_id', $this->item_id)->delete();
        return redirect()->route('Items', app()->getLocale());
    }

    public function render()
    {
        return view('livewire.dashboard.items.edit-items');
    }
}
