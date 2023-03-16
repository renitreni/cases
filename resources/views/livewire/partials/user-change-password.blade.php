
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="changePasswordModal" tabindex="-1"
        aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <label>New Password</label>
                            <input type="tex" class="form-control" wire:model='detail.password'>
                            @error('detail.password')
                                <span class="text-danger">{{ $message }}*</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-2">
                            <label>Confirm Password</label>
                            <input type="tex" class="form-control" wire:model='detail.password_confirmation'>
                            @error('detail.password_confirmation')
                                <span class="text-danger">{{ $message }}*</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click='changePassword'>Edit</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            var changePasswordModal = new bootstrap.Modal(document.getElementById('changePasswordModal'));
            window.addEventListener('close-modal-changePasswordModal', event => {
                changePasswordModal.hide();
            })
            window.addEventListener('open-modal-changePasswordModal', event => {
                changePasswordModal.show();
            })
        </script>
    @endpush