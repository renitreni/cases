<?php

namespace App\Http\Livewire;

use App\Models\Cases;
use App\Models\NatureOfComplain;
use Livewire\Component;

class CasesLivewire extends Component
{
    protected $listeners = ['bind'];

    public $detail;
    public $natureOfComplain;
    public $nature;

    public function render()
    {
        return view('livewire.cases-livewire');
    }

    public function clearInputs()
    {
        $this->detail = [];
        $this->natureOfComplain = [];
    }

    public function bind($id)
    {
        $this->dispatchBrowserEvent('open-modal-crudModal');
        $this->detail = Cases::find($id)->toArray();
        $this->natureOfComplain = NatureOfComplain::where('cases_id', $id)->get()->toArray();
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
            'employer_id' => $this->detail['employer_id'],
            'case_officer' => $this->detail['case_officer'],
            'sra_contact' => $this->detail['sra_contact'],
            'worker_lastname' => $this->detail['worker_lastname'],
            'worker_firstname' => $this->detail['worker_firstname'],
            'worker_middlename' => $this->detail['worker_middlename'],
            'atnsia_case_id' => $this->detail['atnsia_case_id'],
            'cr_no' => $this->detail['cr_no'],
            'office_address' => $this->detail['office_address']
        ]);

        NatureOfComplain::query()->where('cases_id', $this->detail['id'])->delete();
        foreach ($this->natureOfComplain as $item) {
            $item['cases_id'] = $this->detail['id'];
            NatureOfComplain::create($item);
        }

        $this->emit('refreshDatatable');
        $this->detail = [];
    }

    public function store()
    {
        $cases = Cases::create([
            'sra' => $this->detail['sra'],
            'suspension_date' => $this->detail['suspension_date'] ?? null,
            'office_order_no' => $this->detail['office_order_no'] ?? null,
            'suspension_days' => $this->detail['suspension_days'] ?? null,
            'email' => $this->detail['email'] ?? null,
            'employer_name' => $this->detail['employer_name'] ?? null,
            'employer_id' => $this->detail['employer_id'] ?? null,
            'case_officer' => $this->detail['case_officer'] ?? null,
            'sra_contact' => $this->detail['sra_contact'] ?? null,
            'worker_lastname' => $this->detail['worker_lastname'] ?? null,
            'worker_firstname' => $this->detail['worker_firstname'] ?? null,
            'worker_middlename' => $this->detail['worker_middlename'] ?? null,
            'atnsia_case_id' => $this->detail['atnsia_case_id'] ?? null,
        ]);

        foreach ($this->natureOfComplain as $item) {
            $item['cases_id'] = $cases->id;
            NatureOfComplain::create($item);
        }

        $this->emit('refreshDatatable');
        $this->detail = [];
    }

    public function removeNOC($description)
    {
        $this->natureOfComplain = array_filter($this->natureOfComplain, function ($value) use ($description) {
            return $value['description'] != $description;
        });
    }

    public function addNature()
    {
        $this->natureOfComplain[] = [
            'description' => $this->nature
        ];

        $this->nature = '';
    }
}
