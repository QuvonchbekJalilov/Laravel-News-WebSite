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
        $this->authorize('viewAny', Permission::class);
        $permissions = Permission::paginate(20);

        $roles = Role::with('permissions')->get();

        return view('backend.permissions.index', compact('permissions', 'roles'));
    }


    public function create()
    {
        $this->authorize('create', Permission::class);
        
        $roles = Role::all();
        return view('backend.permissions.create', compact('roles'));
    }


    public function store(StorePermissionRequest $request)
    {
        $this->authorize('create', Permission::class);
        
        // Find the role
        $role = Role::find($request->role);

        // Create the permission
        $permission = Permission::create(['name' => $request->name]);

        // If a role is selected and found, assign the permission to it
        if ($role) {
            $role->givePermissionTo($permission);
        }

        return redirect()->back();
    }


    public function edit(Permission $permission)
    {
        $this->authorize('update', Permission::class);
        
        $permission = Permission::find($permission->id);
        $roles = Role::all();
        return view('backend.permissions.edit', compact('permission', 'roles'));
    }


    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $this->authorize('update', Permission::class);
        


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
    }


    public function destroy(Permission $permission)
    {
        $this->authorize('delete', Permission::class);
        
        $permission->delete();

        return redirect()->back();
    }
}
