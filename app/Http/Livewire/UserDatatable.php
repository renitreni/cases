<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Http\Livewire\Abstract\DataTableComponentCustom;

class UserDatatable extends DataTableComponentCustom
{    
    public function builder(): Builder
    {
        return User::query()->with('role');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Role", "role.role")
                ->sortable(),
        ];
    }
}
