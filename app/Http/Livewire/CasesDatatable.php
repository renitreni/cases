<?php

namespace App\Http\Livewire;

use App\Models\Cases;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Http\Livewire\Abstract\DataTableComponentCustom;

class CasesDatatable extends DataTableComponentCustom
{
    public function builder(): Builder
    {
        return Cases::query()->with('lifted');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("CR No.", "cr_no")
                ->searchable()
                ->sortable(),
            Column::make("Sra", "sra")
                ->searchable()
                ->sortable(),
            Column::make("Suspension date", "suspension_date")
                ->sortable(),
            Column::make("Office order no", "office_order_no")
                ->sortable(),
            Column::make("Suspension days", "suspension_days")
                ->sortable(),
            Column::make("Email", "email")
                ->searchable()
                ->sortable(),
            Column::make("Employer name", "employer_name")
                ->searchable()
                ->sortable(),
            Column::make("Case officer", "case_officer")
                ->searchable()
                ->sortable(),
            Column::make("Sra contact", "sra_contact")
                ->searchable()
                ->sortable(),
            Column::make("Worker lasname", "worker_lastname")
                ->searchable()
                ->sortable(),
            Column::make("Worker firstname", "worker_firstname")
                ->searchable()
                ->sortable(),
            Column::make("Worker middlename", "worker_middlename")
                ->searchable()
                ->sortable(),
            Column::make("Atnsia case id", "atnsia_case_id")
                ->searchable()
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
