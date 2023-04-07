<!-- Modal -->
<div wire:ignore.self class="modal fade" id="crudModal" tabindex="-1" aria-labelledby="crudModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crudModalLabel">
                    @isset($detail['id'])
                        Edit Details
                    @else
                        Add Details
                    @endisset
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label>Saudi Recruitment Agency</label>
                                <input class="form-control" wire:model='detail.sra'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Suspension Date</label>
                                <input type="date" class="form-control" wire:model='detail.suspension_date'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Office Order Number</label>
                                <input class="form-control" wire:model='detail.office_order_no'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>No. Of Days Suspended</label>
                                <input type="number" class="form-control" wire:model='detail.suspension_days'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>E-mail</label>
                                <input class="form-control" wire:model='detail.email'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Employer's Name</label>
                                <input class="form-control" wire:model='detail.employer_name'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Employer ID</label>
                                <input class="form-control" wire:model='detail.employer_id'>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label>Case Officer Who Requested For Suspension</label>
                                <input class="form-control" wire:model='detail.case_officer'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Contact Number Of SRA</label>
                                <input class="form-control" wire:model='detail.sra_contact'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Worker's Lastname</label>
                                <input class="form-control" wire:model='detail.worker_lastname'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Worker's Firstname</label>
                                <input class="form-control" wire:model='detail.worker_firstname'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Worker's Middlename</label>
                                <input class="form-control" wire:model='detail.worker_middlename'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>ATNSIA Case ID No.</label>
                                <input class="form-control" wire:model='detail.atnsia_case_id'>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Cr No.</label>
                                <input class="form-control" wire:model='detail.cr_no'>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label>Office Address</label>
                                <textarea class="form-control" wire:model='detail.office_address'></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <h3>Nature Of Complain</h3>
                            </div>
                            @can('admin')
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Keyword"
                                            aria-label="Recipient's username" aria-describedby="button-addon2"
                                            wire:model='nature'>
                                        <button class="btn btn-outline-secondary" type="button" wire:click='addNature'
                                            id="button-addon2">Add</button>
                                    </div>
                                </div>
                            @endcan
                            <div class="col-12">
                                <ol class="list-group list-group-numbered">
                                    @if ($natureOfComplain)
                                        @foreach ($natureOfComplain as $item)
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="fw-bold mr-2">{{ $item['description'] }}</div>

                                                @can('admin')
                                                    <button type="button" class="btn btn-sm btn-danger p-2"
                                                        wire:click='removeNOC("{{ $item['description'] }}")'>
                                                        <i class="fas fa-trash m-0"></i>
                                                    </button>
                                                </li>
                                            @endcan
                                        @endforeach
                                    @endif
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                @can('admin')
                    @isset($detail['id'])
                        <a href="#" class="btn btn-success" data-bs-dismiss="modal"
                            wire:click='$emit("showLifted", {{ $detail['id'] }})'>Lift Suspension</a>
                        <a href="#" class="btn btn-primary" data-bs-dismiss="modal" wire:click='edit'>Update</a>
                        <a href="#" class="btn btn-danger" data-bs-dismiss="modal" wire:click='destroy'>Delete</a>
                    @else
                        <a href="#" class="btn btn-primary" data-bs-dismiss="modal" wire:click='store'>Save
                            changes</a>
                    @endisset
                @endcan
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var crudModal = new bootstrap.Modal(document.getElementById('crudModal'));
        window.addEventListener('close-modal-crudModal', event => {
            crudModal.hide();
        })
        window.addEventListener('open-modal-crudModal', event => {
            crudModal.show();
        })
    </script>
@endpush
