<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user', compact('users'));
    }
    public function create(Request $request)
    {
        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);

        User::create($request->all());
        //return redirect()->route('users');
        return back()->with('flash', "El usuario se creo correctamente!");
    }
    public function update(Request $request, User $user)
    {
        $request->merge([
            'password' => Hash::make($request->input('password'))
        ]);

        $user->update($request->all());

        return redirect()->route('users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users');
    }

}
