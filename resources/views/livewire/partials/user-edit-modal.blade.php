<!-- Modal -->
<div wire:ignore.self class="modal fade" id="userBindModal" tabindex="-1" aria-labelledby="userBindModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userBindModalLabel">User Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" wire:model='detail.name'>
                        @error('detail.name')
                            <span class="text-danger">{{ $message }}*</span>
                        @enderror
                    </div>
                    <div class="col-12 mb-2">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" wire:model='detail.email' readonly>
                    </div>
                    <div class="col-12 mb-2">
                        <label>Roles</label>
                        <select type="text" class="form-select" wire:model='detail.role.role'>
                            <option value="">Unspecified</option>
                            @foreach ($roles as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                        @error('detail.role')
                            <span class="text-danger">{{ $message }}*</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" wire:click='destroy'>Delete</button>
                <button type="button" class="btn btn-primary" wire:click='update'>Edit</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var userEditModal = new bootstrap.Modal(document.getElementById('userEditModal'));
        window.addEventListener('close-modal-userEditModal', event => {
            userEditModal.hide();
        })
        window.addEventListener('open-modal-userEditModal', event => {
            userEditModal.show();
        })

        var userBindModal = new bootstrap.Modal(document.getElementById('userBindModal'));
        window.addEventListener('close-modal-userBindModal', event => {
            userBindModal.hide();
        })
        window.addEventListener('open-modal-userBindModal', event => {
            userBindModal.show();
        })
    </script>
@endpush
