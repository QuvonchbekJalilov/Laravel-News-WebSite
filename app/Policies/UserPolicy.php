<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return auth()->user()->can('user:viewAny') || auth()->user()->hasRole('admin');
    }

    
    public function view(User $user)
    {
        return auth()->user()->can('user:view') || auth()->user()->hasRole('admin');
    }

    
    public function create(User $user)
    {
        return auth()->user()->can('user:create') || auth()->user()->hasRole('admin');
    }

    
    public function update(User $user)
    {
        return auth()->user()->hasRole('admin');

    }

    
    public function delete(User $user)
    {
        return auth()->user()->can('user:delete') || auth()->user()->hasRole('admin');

    }

   
    public function restore(User $user)
    {
        return auth()->user()->can('user:restore') || auth()->user()->hasRole('admin');

    }

    
    public function forceDelete(User $user)
    {
        return true;
    }
}
