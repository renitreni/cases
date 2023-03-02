<?php

namespace App\Http\Livewire;

use App\Models\Cases;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Http\Livewire\Abstract\DataTableComponentCustom;

class CasesDatatable extends DataTableComponentCustom
{
    protected $model = Cases::class;

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Sra", "sra")
                ->sortable(),
            Column::make("Suspension date", "suspension_date")
                ->sortable(),
            Column::make("Office order no", "office_order_no")
                ->sortable(),
            Column::make("Suspension days", "suspension_days")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Employer name", "employer_name")
                ->sortable(),
            Column::make("Case officer", "case_officer")
                ->sortable(),
            Column::make("Sra contact", "sra_contact")
                ->sortable(),
            Column::make("Worker lasname", "worker_lasname")
                ->sortable(),
            Column::make("Worker firstname", "worker_firstname")
                ->sortable(),
            Column::make("Worker middlename", "worker_middlename")
                ->sortable(),
            Column::make("Atnsia case id", "atnsia_case_id")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
