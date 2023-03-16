<?php

namespace App\Providers;

use App\Enums\UserRolesEnum;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function (User $user) {
           return $user->role->role == UserRolesEnum::ADMIN->value;
        });
    
        $this->registerPolicies();

        //
    }
}
