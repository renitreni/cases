<?php

namespace App\Http\Livewire;

use App\Models\Cases;
use App\Models\Lifted;
use Livewire\Component;

class LiftedLivewire extends Component
{
    public $detail;

    public $lifted;

    public $listeners = ['bind'];

    public function render()
    {
        return view('livewire.lifted-livewire');
    }

    public function bind($id)
    {
        $this->detail = Cases::query()->with('lifted')->find($id);
        $this->lifted = $this->detail->lifted->toArray();
        $this->dispatchBrowserEvent('open-modal');
    }

    public function edit()
    {
        Lifted::updateOrCreate(['id' => $this->lifted['id']], $this->lifted);
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('refreshDatatable');
    }
}
