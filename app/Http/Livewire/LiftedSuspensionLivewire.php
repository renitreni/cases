<?php

namespace App\Http\Livewire;

use App\Models\Cases;
use App\Models\Lifted;
use Livewire\Component;

class LiftedSuspensionLivewire extends Component
{
    public $detail;
    public $case;

    public function render()
    {
        if (isset($this->detail['cases_id'])) {
            $this->case = Cases::find($this->detail['cases_id']);
        }

        return view('livewire.lifted-suspension-livewire');
    }

    public function store()
    {
        $this->validate([
            'detail.office_order_no' => 'required',
            'detail.effective_date' => 'required',
            'detail.officer_in_charge' => 'required',
        ]);

        Lifted::create($this->detail);

        $this->detail;
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('refreshDatatable');
    }
}
