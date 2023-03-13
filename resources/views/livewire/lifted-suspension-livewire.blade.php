<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="liftedModal" tabindex="-1" aria-labelledby="liftedModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="liftedModalLabel">
                        Lifting Suspension
                        <strong class="text-danger">
                            Office Order No. {{ $this->case->office_order_no ?? '' }}
                        </strong>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Office order No.</label>
                            <input type="text" class="form-control" wire:model='detail.office_order_no'>
                            @error('detail.office_order_no')
                                <span class="text-danger">This field is required</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Lifted Date</label>
                            <input type="date" class="form-control" wire:model='detail.effective_date'>
                            @error('detail.effective_date')
                                <span class="text-danger">This field is required</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Officer in Charge</label>
                            <input type="text" class="form-control" wire:model='detail.officer_in_charge'>
                            @error('detail.officer_in_charge')
                                <span class="text-danger">This field is required</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Remarks</label>
                            <textarea type="text" class="form-control" wire:model='detail.remarks'></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- @isset($detail['id'])
                        <a href="#" class="btn btn-primary" data-bs-dismiss="modal" wire:click='edit'>Update</a>
                        <a href="#" class="btn btn-danger"  data-bs-dismiss="modal" wire:click='destroy'>Delete</a>
                    @else --}}
                    <a href="#" class="btn btn-primary" wire:click='store'>Submit</a>
                    {{-- @endisset --}}
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
        </script>
    @endpush
</div>
