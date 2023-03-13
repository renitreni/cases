<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Abstract\DataTableComponentCustom;
use App\Models\Cases;
use App\Models\Lifted;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class LiftedDatatable extends DataTableComponentCustom
{
    public function builder(): Builder
    {
        return Cases::query()->with('lifted')->whereHas('lifted');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Sra", "sra")
                ->searchable()
                ->sortable(),
            Column::make("CR No.", "cr_no")
                ->searchable()
                ->sortable(),
            Column::make("Lifted date", "lifted.effective_date")
                ->sortable(),
            Column::make("Officer In Charge", "lifted.officer_in_charge")
                ->searchable()
                ->sortable(),
            Column::make("Lifted Office Order no", "lifted.office_order_no")
                ->searchable()
                ->sortable(),
            Column::make("Suspension Office Order no", "office_order_no")
                ->searchable()
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
