    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="userCrudModal" tabindex="-1" aria-labelledby="userCrudModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userCrudModalLabel">User Form</h5>
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
                            <input type="text" name="email" class="form-control" wire:model='detail.email'>
                            @error('detail.email')
                                <span class="text-danger">{{ $message }}*</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-2">
                            <label>Roles</label>
                            <select type="text" class="form-select" wire:model='detail.role'>
                                <option value="">Unspecified</option>
                                @foreach ($roles as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                            @error('detail.role')
                                <span class="text-danger">{{ $message }}*</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-2">
                            <label>Password</label>
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
                    <button type="button" class="btn btn-primary" wire:click='store'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            var myModal = new bootstrap.Modal(document.getElementById('userCrudModal'));
            window.addEventListener('close-modal', event => {
                myModal.hide();
            })
            window.addEventListener('open-modal', event => {
                myModal.show();
            })
        </script>
    @endpush