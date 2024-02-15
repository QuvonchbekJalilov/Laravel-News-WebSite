<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return auth()->user()->can('post:viewAny') || auth()->user()->hasRole('admin');
    }

    
    public function view(User $user, Post $post)
    {
        return auth()->user()->can('post:view') || auth()->user()->hasRole('admin');
    }

    
    public function create(User $user)
    {
        return auth()->user()->can('post:create') || auth()->user()->hasRole('admin');

    }

    
    public function update(User $user, Post $post)
    {
        return auth()->user()->can('post:update') || auth()->user()->hasRole('admin');

    }

    
    public function delete(User $user, Post $post)
    {
        return auth()->user()->can('post:delete') || auth()->user()->hasRole('admin');
    }

    
    public function restore(User $user, Post $post)
    {
        return auth()->user()->can('post:restore') || auth()->user()->hasRole('admin');
    }

    
    public function forceDelete(User $user, Post $post)
    {
        return true;
    }
}
