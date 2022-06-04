<?php

namespace App\Http\Livewire\Dashboard\Services;

use App\Http\Traits\LivewireDashboardTrait;
use Livewire\Component;

class CreateService extends Component
{
    use LivewireDashboardTrait;

    public $service_id;
    public $en_name;
    public $ar_name;
    public $en_desc;
    public $ar_desc;
    public $icon;

    public $message;

    public function create()
    {
        $this->livewire_create(
            [
                'en_name' => ['required', 'string', 'max:72'],
                'ar_name' => ['required', 'string', 'max:72'],
                'en_desc' => ['required', 'string', 'max:288'],
                'ar_desc' => ['required', 'string', 'max:288'],
                'icon' => ['required', 'string', 'max:288'],
            ],
            'App\Models\Services',
            [
                'en_name',
                'ar_name',
                'en_desc',
                'ar_desc',
                'icon',
            ],
            'Services Created Successfully',
            'Created'
        );
        return redirect()->route('Services', app()->getLocale());
    }

    public function clear()
    {
        $this->livewire_clear([
            'en_name',
            'ar_name',
            'en_desc',
            'ar_desc',
            'icon',
        ]);
    }
    public function render()
    {
        return view('livewire.dashboard.services.create-service');
    }
}
