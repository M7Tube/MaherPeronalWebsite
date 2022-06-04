<?php

namespace App\Http\Livewire\Dashboard\Services;

use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Services;

class EditService extends Component
{
    use LivewireDashboardTrait;

    public $service_id;
    public $en_name;
    public $ar_name;
    public $en_desc;
    public $ar_desc;
    public $icon;

    public $message;

    public function mount()
    {
        $this->service_id = request('id');
        $data = Services::find($this->service_id);
        if ($data) {
            $this->en_name = $data->en_name;
            $this->ar_name = $data->ar_name;
            $this->en_desc = $data->en_desc;
            $this->ar_desc = $data->ar_desc;
            $this->icon = $data->icon;
        } else {
        }
    }

    public function edit()
    {
        $data = Services::where('service_id', $this->service_id)->first();
        if ($data) {
            $data->en_name = $this->en_name;
            $data->ar_name = $this->ar_name;
            $data->en_desc = $this->en_desc;
            $data->ar_desc = $this->ar_desc;
            $data->icon = $this->icon;
            $data->save();
            return redirect()->route('Services', app()->getLocale());
        } else {
        }
    }

    public function render()
    {
        return view('livewire.dashboard.services.edit-service');
    }
}
