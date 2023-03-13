<div>
    <div class="card card-default card-md mb-4 mt-5">
        <div class="card-header">
            <h6>Cases Overview</h6>
        </div>
        <div class="card-body">
            <div class="columnGrid-wrapper">
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-primary mb-2" data-bs-toggle="modal" wire:click='$set("detail", [])'
                            data-bs-target="#crudModal">
                            Add Suspension
                        </a>
                    </div>
                    <div class="col-12">
                        <livewire:cases-datatable />
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.partials.suspension-modal')
    <livewire:lifted-suspension-livewire>
</div>
