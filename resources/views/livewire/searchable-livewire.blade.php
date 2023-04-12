<div>
    <div class="card card-default card-md mb-4 mt-5">
        <div class="card-header">
            <h6>Searchables Overview</h6>
        </div>
        <div class="card-body">
            <div class="columnGrid-wrapper">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label>CR No.</label>
                        <input type="text" class="form-control" wire:model='cr_no'>
                    </div>
                    <div class="col-md-4">
                        <label>Saudi Recruitment Agency</label>
                        <input type="text" class="form-control" wire:model='sra'>
                    </div>
                    <div class="col-md-4">
                        <label>National ID (Employer)</label>
                        <input type="text" class="form-control" wire:model='employer_national_id'>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <div class="col-auto">
                        <button type="button" wire:click='clear' class="btn btn-outline-secondary">Clear Filters</button>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" wire:click='find'>
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Find
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-default card-md mb-4 mt-5">
        <div class="card-header">
            <h6>Results</h6>
        </div>
        <div class="card-body">
            <div class="columnGrid-wrapper">
                @if (!$results)
                    <div class="d-flex mb-3 justify-content-center">
                        <p class="h1">No Results.</p>
                    </div>
                @else
                    @foreach ($results as $result)
                        <div class="card p-3 mb-3">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">Saudi Recruitment Agency</p>
                                        <p>{{ $result['sra'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">S.R.A. Contact No.</p>
                                        <p>{{ $result['sra_contact'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">Suspension Date</p>
                                        <p>{{ $result['suspension_date'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">ATNSIA Case ID</p>
                                        <p>{{ $result['atnsia_case_id'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">CR No.</p>
                                        <p>{{ $result['cr_no'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">Worker Fullname</p>
                                        <p>{{ $result['worker_lastname'] }}, {{ $result['worker_firstname'] }} {{ $result['worker_middlename'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">National ID (Employer)</p>
                                        <p>{{ $result['employer_national_id'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">Office Order No.</p>
                                        <p>{{ $result['office_order_no'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">Suspension Days</p>
                                        <p>{{ $result['suspension_days'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">E-mail</p>
                                        <p>{{ $result['email'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">Employer Name</p>
                                        <p>{{ $result['employer_name'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">Case Officer</p>
                                        <p>{{ $result['case_officer'] }}</p>
                                    </div>
                                    <div class="col-md-3 text-black-400">
                                        <p class="h6">Office Address</p>
                                        <p>{{ $result['office_address'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
