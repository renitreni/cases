<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Enums\UserRolesEnum;
use App\Models\User;
use App\Models\UserRole;

class UserLivewire extends Component
{
    public $roles;

    public $detail;

    protected $listeners = ['bind'];

    public function mount()
    {
        $this->roles = UserRolesEnum::cases();
    }

    public function render()
    {
        return view('livewire.user-livewire');
    }

    public function clearInputs()
    {
        $this->dispatchBrowserEvent('open-modal');
    }

    public function store()
    {
        $this->validate([
            'detail.name' => 'required',
            'detail.email' => 'required|email|unique:users,email',
            'detail.role' => 'required',
            'detail.password' => 'required|same:detail.password_confirmation',
        ]);

        $user = User::create([
            "name" => $this->detail['name'],
            "email" => $this->detail['email'],
            "password" => bcrypt($this->detail['password']),
        ]);

        $user->role()->save(new UserRole(["role" => $this->detail['role'],]));

        $this->detail = [];
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('refreshDatatable');
    }

    public function bind($id)
    {
        $this->detail = User::with('role')->find($id)->toArray();

        $this->dispatchBrowserEvent('open-modal-userEditModal');
    }

    public function update()
    {
        $this->validate([
            'detail.name' => 'required',
            'detail.role.role' => 'required',
        ]);

        $user = User::updateOrCreate(
            ['id' => $this->detail['id']],
            [
                "name" => $this->detail['name'],
                "email" => $this->detail['email'],
            ]
        );

        $user->role()->updateOrCreate(
            ['user_id' => $this->detail['id']],
            ["role" => $this->detail['role']['role'],]
        );

        $this->detail = [];
        $this->dispatchBrowserEvent('close-modal-userBindModal');
        $this->emit('refreshDatatable');
    }

    public function changePassword()
    {
        $this->validate([
            'detail.password' => 'required|same:detail.password_confirmation',
        ]);

        User::updateOrCreate(
            ['id' => $this->detail['id']],
            ["password" => bcrypt($this->detail['password']),]
        );

        $this->detail = [];
        $this->dispatchBrowserEvent('close-modal-changePasswordModal');
        $this->emit('refreshDatatable');
    }

    public function destroy()
    {
        User::destroy($this->detail['id']);

        $this->detail = [];
        $this->dispatchBrowserEvent('close-modal-userBindModal');
        $this->emit('refreshDatatable');
    }
}
