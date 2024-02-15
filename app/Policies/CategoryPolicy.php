<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return auth()->user()->can('category:viewAny') || auth()->user()->hasRole('admin');
    }

    
    public function view(User $user, Category $category)
    {
        return auth()->user()->can('category:view') || auth()->user()->hasRole('admin');

    }

    
    public function create(User $user)
    {
        return auth()->user()->can('category:create') || auth()->user()->hasRole('admin');

    }

    
    public function update(User $user, Category $category)
    {
        return true;

    }

    
    public function delete(User $user, Category $category)
    {
        return auth()->user()->can('category:delete') || auth()->user()->hasRole('admin');

    }

   
    public function restore(User $user, Category $category)
    {
        return auth()->user()->can('category:restore') || auth()->user()->hasRole('admin');

    }

    
    public function forceDelete(User $user, Category $category)
    {
        return true;
    }
}
