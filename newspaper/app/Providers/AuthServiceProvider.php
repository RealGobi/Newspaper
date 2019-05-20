<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerPolicies();

        Gate::define('superUsers-only', function ($user) {
            if($user->isAdmin == 1)
            {
                return true;
            }
            return false;
        });

        Gate::define('user', function ($user) {
            if($user->isAdmin == 1 || $user->isAdmin == null)
            {
                return true;
            }
            return false;
        });
    }
}
