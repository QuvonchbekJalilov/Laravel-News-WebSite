<?php

namespace App\Policies;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    
    public function viewAny(User $user)
    {
        return auth()->user()->can('permission:viewAny') || auth()->user()->hasRole('admin');
    }

    
    public function view(User $user, Permission $permission)
    {
        return auth()->user()->can('permission:view') || auth()->user()->hasRole('admin');
    }

   
    public function create(User $user)
    {
        return auth()->user()->can('permission:create') || auth()->user()->hasRole('admin');

    }

    
    public function update(User $user, Permission $permission)
    {
        return auth()->user()->can('permission:update') || auth()->user()->hasRole('admin');

    }

   
    public function delete(User $user, Permission $permission)
    {
        return auth()->user()->can('permission:delete') || auth()->user()->hasRole('admin');

    }

    
    public function restore(User $user, Permission $permission)
    {
        return auth()->user()->can('permission:restore') || auth()->user()->hasRole('admin');

    }

    
    public function forceDelete(User $user, Permission $permission)
    {
        return true;
    }
}
