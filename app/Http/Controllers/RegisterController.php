<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class RegisterController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->roles()->attach(Role::where('name','user')->first());    
        Auth()->login($user);

        return redirect('/posts');
    }
}
