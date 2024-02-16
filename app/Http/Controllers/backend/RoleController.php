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
        if (auth()->user()->hasRole('admin')) {
            $roles = Role::all();
            return view('backend.roles.index', compact('roles'));
        } else {
            return view('auth.errorpage');
        }
    }


    public function create()
    {
        if (auth()->user()->hasRole('admin')) {

            return view('backend.roles.create');
        } else {
            return view('auth.errorpage');
        }
    }


    public function store(StoreRoleRequest $request)
    {
        if (auth()->user()->hasRole('admin')) {

            $role = Role::create([
                'name' => $request->name,
            ]);

            return redirect()->route('backend.roles.index');
        } else {
            return view('auth.errorpage');
        }
    }





    public function edit(Role $role)
    {
        if (auth()->user()->hasRole('admin')) {

            $role = Role::find($role->id);

            return view('backend.roles.edit', compact('role'));
        } else {
            return view('auth.errorpage');
        }
    }


    public function update(UpdateRoleRequest $request, Role $role)
    {
        if (auth()->user()->hasRole('admin')) {

            $roles = Role::all();
            $role->update($request->all());

            return view('backend.roles.index', compact('roles'))->with('success', 'User deleted successfully deleted');
        } else {
            return view('auth.errorpage');
        }
    }


    public function destroy(Role $role)
    {
        if (auth()->user()->hasRole('admin')) {

            $role->delete();

            return redirect()->back();
        } else {
            return view('auth.errorpage');
        }
    }
}
