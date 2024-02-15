<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

   
    public function viewAny(User $user)
    {
        return auth()->user()->can('role:viewAny') || auth()->user()->hasRole('admin');
    }

    
    public function view(User $user, Role $role)
    {
        return auth()->user()->can('role:view') || auth()->user()->hasRole('admin');
    }

    
    public function create(User $user)
    {
        return auth()->user()->can('role:create') || auth()->user()->hasRole('admin');
    }

  
    public function update(User $user, Role $role)
    {
        return auth()->user()->can('role:update') || auth()->user()->hasRole('admin');
    }

    
    public function delete(User $user, Role $role)
    {
        return auth()->user()->can('role:delete') || auth()->user()->hasRole('admin');
    }

    
    public function restore(User $user, Role $role)
    {
        return auth()->user()->can('role:restore') || auth()->user()->hasRole('admin');
    }

    
    public function forceDelete(User $user, Role $role)
    {
        return true;
    }
}
