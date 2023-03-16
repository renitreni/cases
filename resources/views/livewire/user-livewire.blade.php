<div>
    <div class="card card-default card-md mb-4 mt-5">
        <div class="card-header">
            <h6>Users Overview</h6>
        </div>
        <div class="card-body">
            <div class="columnGrid-wrapper">
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-primary mb-2" wire:click='clearInputs'>
                            Add User
                        </a>
                    </div>
                    <div class="col-12">
                        <livewire:user-datatable />
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.partials.user-create-modal')

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="userEditModal" tabindex="-1" aria-labelledby="userEditModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userEditModalLabel">Choose Action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                data-bs-target="#userBindModal">Change Details</button>
                        </div>
                        <div class="col-12 mb-2">
                            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                data-bs-target="#changePasswordModal">Change Password</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.partials.user-edit-modal')
    @include('livewire.partials.user-change-password')

</div>
