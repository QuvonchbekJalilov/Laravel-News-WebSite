<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }
    public function index(Request $request)
    {
        $usersQuery = User::query();
    
        if ($request->filled('first_name')) {
            $usersQuery->where('first_name', 'like', '%' . $request->input('first_name') . '%');
        }
    
        if ($request->filled('last_name')) {
            $usersQuery->where('last_name', 'like', '%' . $request->input('last_name') . '%');
        }
    
        if ($request->filled('role')) {
            $usersQuery->whereHas('roles', function ($query) use ($request) {
                $query->where('name', 'like', "%" . $request->input('role') . "%");
            });
        }
    
        // Paginate the results
        $users = $usersQuery->paginate(5);
        
    
        return view('backend.users.index', compact('users'));
    }
    




    public function create()
    {
        $roles = Role::all();
        return view('backend.users.create')->with('roles', $roles);
    }


    public function store(Request $request, User $user)
    {

        $valid = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);
        $valid['password'] = Hash::make($valid['password']);
        
        $user = User::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => $valid['password'],
        ]);
        $role = Role::findById($request->role);
        $user->assignRole($role->name);

        return view('backend.users.show')->with('user', $user);
    }


    public function show(User $user)
    {
        $user =  User::find($user->id);

        return view('backend.users.show', compact('user'));
    }


    public function edit(User $user)
    {
        $user = User::find($user->id);
        $roles = Role::all();

        return view('backend.users.edit', compact(['user', 'roles']));
    }


    public function update(Request $request, User $user)
    {

        $user = User::findOrFail($user->id);
        $role = Role::findById($request->role);

        $user->syncRoles($role->name);
        $user->save();
        return view('backend.users.show')->with('user', $user);
    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully deleted');
    }

    public function searchUser(Request $request)
    {
    }
}
