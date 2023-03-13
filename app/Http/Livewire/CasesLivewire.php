<?php

namespace App\Http\Livewire;

use App\Models\Cases;
use Livewire\Component;

class CasesLivewire extends Component
{
    protected $listeners = ['bind'];

    public $detail;

    public function render()
    {
        return view('livewire.cases-livewire');
    }

    public function bind($id)
    {
        $this->detail = Cases::find($id)->toArray();
    }

    public function destroy()
    {
        Cases::destroy($this->detail['id']);

        $this->emit('refreshDatatable');
        $this->detail = [];
    }

    public function edit()
    {
        Cases::updateOrCreate(['id' => $this->detail['id']], [
            'sra' => $this->detail['sra'],
            'suspension_date' => $this->detail['suspension_date'],
            'office_order_no' => $this->detail['office_order_no'],
            'suspension_days' => $this->detail['suspension_days'],
            'email' => $this->detail['email'],
            'employer_name' => $this->detail['employer_name'],
            'case_officer' => $this->detail['case_officer'],
            'sra_contact' => $this->detail['sra_contact'],
            'worker_lastname' => $this->detail['worker_lastname'],
            'worker_firstname' => $this->detail['worker_firstname'],
            'worker_middlename' => $this->detail['worker_middlename'],
            'atnsia_case_id' => $this->detail['atnsia_case_id'],
            'cr_no' => $this->detail['cr_no'],
            'office_address' => $this->detail['office_address']
        ]);

        $this->emit('refreshDatatable');
        $this->detail = [];
    }

    public function store()
    {
        Cases::create([
            'sra' => $this->detail['sra'],
            'suspension_date' => $this->detail['suspension_date'] ?? null,
            'office_order_no' => $this->detail['office_order_no'] ?? null,
            'suspension_days' => $this->detail['suspension_days'] ?? null,
            'email' => $this->detail['email'] ?? null,
            'employer_name' => $this->detail['employer_name'] ?? null,
            'case_officer' => $this->detail['case_officer'] ?? null,
            'sra_contact' => $this->detail['sra_contact'] ?? null,
            'worker_lastname' => $this->detail['worker_lastname'] ?? null,
            'worker_firstname' => $this->detail['worker_firstname'] ?? null,
            'worker_middlename' => $this->detail['worker_middlename'] ?? null,
            'atnsia_case_id' => $this->detail['atnsia_case_id'] ?? null,
        ]);

        $this->emit('refreshDatatable');
        $this->detail = [];
    }
}
