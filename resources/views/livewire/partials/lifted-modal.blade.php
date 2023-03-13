<!-- Modal -->
<div wire:ignore.self class="modal fade" id="liftedModal" tabindex="-1" aria-labelledby="liftedModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="liftedModalLabel">
                    Lift Details
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row border radius py-3">
                    <div class="col-auto mb-3">
                        <strong class="text-dark">Saudi Recruitment Agency</strong>
                        <p class="text-dark">{{ $detail->sra ?? '' }}</p>
                    </div>
                    <div class="col-auto mb-3">
                        <strong class="text-dark">Employer</strong>
                        <p class="text-dark">{{ $detail->employer_name ?? '' }}</p>
                    </div>
                    <div class="col-auto mb-3">
                        <strong class="text-dark">Office Order No.</strong>
                        <p class="text-dark">{{ $detail->office_order_no ?? '' }}</p>
                    </div>
                    <div class="col-auto mb-3">
                        <strong class="text-dark">CR No.</strong>
                        <p class="text-dark">{{ $detail->cr_no ?? '' }}</p>
                    </div>
                    <div class="col-auto mb-3">
                        <strong class="text-dark">ATNSIA Case ID</strong>
                        <p class="text-dark">{{ $detail->atnsia_case_id ?? '' }}</p>
                    </div>
                    <div class="col-auto mb-3">
                        <strong class="text-dark">Suspension Date</strong>
                        <p class="text-dark">{{ $detail->suspension_date ?? '' }}</p>
                    </div>
                    <div class="col-auto mb-3">
                        <strong class="text-dark">Suspension Days</strong>
                        <p class="text-dark">{{ $detail->suspension_days ?? '' }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Office order No.</label>
                        <input type="text" class="form-control" wire:model='lifted.office_order_no'>
                        @error('lifted.office_order_no')
                            <span class="text-danger">This field is required</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Lifted Date</label>
                        <input type="date" class="form-control" wire:model='lifted.effective_date'>
                        @error('lifted.effective_date')
                            <span class="text-danger">This field is required</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Officer in Charge</label>
                        <input type="text" class="form-control" wire:model='lifted.officer_in_charge'>
                        @error('lifted.officer_in_charge')
                            <span class="text-danger">This field is required</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Remarks</label>
                        <textarea type="text" class="form-control" wire:model='lifted.remarks'></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                @isset($detail['id'])
                    <a href="#" class="btn btn-primary" data-bs-dismiss="modal" wire:click='edit'>Update</a>
                    <a href="#" class="btn btn-danger" data-bs-dismiss="modal" wire:click='destroy'>Delete</a>
                {{-- @else
                    <a href="#" class="btn btn-primary" data-bs-dismiss="modal" wire:click='store'>Save changes</a> --}}
                @endisset
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('liftedModal'));
        window.Livewire.on('showLifted', caseId => {
            @this.set('detail.cases_id', caseId)
            myModal.show();
        })
        window.addEventListener('close-modal', event => {
            myModal.hide();
        })
        window.addEventListener('open-modal', event => {
            myModal.show();
        })
    </script>
@endpush
