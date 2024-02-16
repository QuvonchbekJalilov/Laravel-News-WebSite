<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    

    public function index()
    {
        if (auth()->user()->hasRole('admin')) {
        $permissions = Permission::paginate(20);

        $roles = Role::with('permissions')->get();

        return view('backend.permissions.index', compact('permissions', 'roles'));
    } else {
        return view('auth.errorpage');
    }
    }


    public function create()
    {
        if (auth()->user()->hasRole('admin')) {
        
        $roles = Role::all();
        return view('backend.permissions.create', compact('roles'));
    } else {
        return view('auth.errorpage');
    }
    }


    public function store(StorePermissionRequest $request)
    {
        if (auth()->user()->hasRole('admin')) {
        
        // Find the role
        $role = Role::find($request->role);

        // Create the permission
        $permission = Permission::create(['name' => $request->name]);

        // If a role is selected and found, assign the permission to it
        if ($role) {
            $role->givePermissionTo($permission);
        }

        return redirect()->back();
    } else {
        return view('auth.errorpage');
    }
    }


    public function edit(Permission $permission)
    {
        if (auth()->user()->hasRole('admin')) {
        
        $permission = Permission::find($permission->id);
        $roles = Role::all();
        return view('backend.permissions.edit', compact('permission', 'roles'));
    } else {
        return view('auth.errorpage');
    }
    }


    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        if (auth()->user()->hasRole('admin')) {
        


        $oldRole = $permission->roles->first();


        if ($request->has('role')) {
            $newRole = Role::find($request->role);
            $permission->roles()->sync([$newRole->id]);
        } else {
            $permission->roles()->detach($oldRole->id);
        }


        $permission->name = $request->name;
        $permission->save();

        return redirect()->back();
    } else {
        return view('auth.errorpage');
    }
    }


    public function destroy(Permission $permission)
    {
        if (auth()->user()->hasRole('admin')) {
        
        $permission->delete();

        return redirect()->back();
    } else {
        return view('auth.errorpage');
    }
    }
}
