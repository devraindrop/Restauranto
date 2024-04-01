<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user): bool {
            return $user->role_id === 100 || $user->role_id === 200;
        });

        Gate::define('delete.restaurant', function (User $user, Restaurant $restaurant): bool {
            return $user->role_id === 100 || ($user->role_id === 300 && $restaurant->user_id === $user->id);
        });

        Gate::define('edit.restaurant', function (User $user, Restaurant $restaurant): bool {
            return $user->role_id === 100 || $user->role_id === 200 || ($user->role_id === 300 && $restaurant->user_id === $user->id);
        });
    }
}
