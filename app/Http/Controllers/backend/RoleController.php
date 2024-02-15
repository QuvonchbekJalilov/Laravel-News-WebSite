<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
   

    public function index()
    {
        $this->authorize('viewAny', Role::class);
        
        $roles = Role::all();

        return view('backend.roles.index', compact('roles'));
    }


    public function create()
    {
        $this->authorize('create', Role::class);
        
        return view('backend.roles.create');
    }


    public function store(StoreRoleRequest $request)
    {
        $this->authorize('create', Role::class);
        
        $role = Role::create([
            'name' => $request->name,
        ]);

        return redirect()->route('backend.roles.index');
    }


    public function show(Role $role)
    {
        $this->authorize('view', Role::class);
    }


    public function edit(Role $role)
    {
        $this->authorize('update', Role::class);
        
        $role = Role::find($role->id);

        return view('backend.roles.edit', compact('role'));
    }


    public function update(UpdateRoleRequest $request, Role $role)
    {
        $this->authorize('update', Role::class);
        
        $roles = Role::all();
        $role->update($request->all());

        return view('backend.roles.index', compact('roles'))->with('success', 'User deleted successfully deleted');
    }


    public function destroy(Role $role)
    {
        $this->authorize('delete', Role::class);
        
        $role->delete();

        return redirect()->back();
    }
}
