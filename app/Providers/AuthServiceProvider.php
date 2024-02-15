<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Policies\PermissionPolicy;
use App\Policies\RolePolicy;

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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('permission:viewAny', [PermissionPolicy::class, 'viewAny']);
        Gate::define('permission:view', [PermissionPolicy::class, 'view']);
        Gate::define('permission:create', [PermissionPolicy::class, 'create']);
        Gate::define('permission:update', [PermissionPolicy::class, 'update']);
        Gate::define('permission:delete', [PermissionPolicy::class, 'delete']);
        Gate::define('permission:restore', [PermissionPolicy::class, 'restore']);
        Gate::define('permission:forceDelete', [PermissionPolicy::class, 'forceDelete']);

        Gate::define('role:viewAny', [RolePolicy::class, 'viewAny']);
        Gate::define('role:view', [RolePolicy::class, 'view']);
        Gate::define('role:create', [RolePolicy::class, 'create']);
        Gate::define('role:update', [RolePolicy::class, 'update']);
        Gate::define('role:delete', [RolePolicy::class, 'delete']);
        Gate::define('role:restore', [RolePolicy::class, 'restore']);
        Gate::define('role:forceDelete', [RolePolicy::class, 'forceDelete']);
    }
}
