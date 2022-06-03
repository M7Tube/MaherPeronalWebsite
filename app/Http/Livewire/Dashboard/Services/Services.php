<?php

namespace App\Http\Livewire\Dashboard\Services;

use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Services as ModelsServices;

class Services extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $service_id;
    public $en_name;
    public $ar_name;
    public $en_desc;
    public $ar_desc;
    public $icon;

    public $orderBy = 'en_name';
    public $orderAsc = true;
    public $search = '';

    public function Create()
    {
        $this->livewire_create(
            [
                'en_name' => ['required', 'string', 'max:72'],
                'ar_name' => ['required', 'string', 'max:72'],
                'en_desc' => ['required', 'string', 'max:288'],
                'ar_desc' => ['required', 'string', 'max:288'],
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
    }

    public function edit($id)
    {
        $this->livewire_edit('S', 'App\Models\Services', 'service_id', $id, [
            'service_id', 'en_name', 'ar_name',
            'en_desc',
            'ar_desc',
            'icon'
        ], 'WrongServices', 'You Can Not Edit This Services');
    }
    public function clear()
    {
        $this->livewire_clear([
            'service_id', 'en_name', 'ar_name',
            'en_desc',
            'ar_desc',
            'icon'
        ]);
    }
    public function update()
    {
        $this->livewire_update(
            [
                'en_name' => ['string', 'max:72'],
                'ar_name' => ['string', 'max:72'],
                'en_desc' => ['string', 'max:288'],
                'ar_desc' => ['string', 'max:288'],
            ],
            'S',
            'App\Models\Services',
            $this->service_id,
            [
                'en_name',
                'ar_name',
                'en_desc',
                'ar_desc',
                'icon',
            ],
            'Services Updated Successfully',
            'You Can Not Edit This Services',
            'Updated'
        );
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\Services', 'service_id', $this->service_id, 'Services Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.services.services',
            [
                'S' => ModelsServices::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
