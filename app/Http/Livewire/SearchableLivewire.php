<?php

namespace App\Http\Livewire;

use App\Models\Cases;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SearchableLivewire extends Component
{
    public $cr_no;

    public $sra;

    public $employer_national_id;

    public $results;

    public function render()
    {
        return view('livewire.searchable-livewire');
    }

    public function find()
    {
        $this->results = Cases::query()
            ->when($this->cr_no, function($q){
                $q->where(DB::raw('lower(cr_no)'), 'like', "$this->cr_no%");
            })
            ->when($this->sra, function($q){
                $q->where(DB::raw('lower(sra)'), 'like', "$this->sra%");
            })
            ->when($this->employer_national_id, function($q){
                $q->where(DB::raw('lower(employer_national_id)'), 'like', "$this->sra%");
            })
            ->get()
            ->toArray();
    }

    public function clear()
    {
        $this->cr_no = null;
        $this->sra = null;
        $this->results = null;
    }
}
