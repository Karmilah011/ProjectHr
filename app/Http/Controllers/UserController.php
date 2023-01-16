<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }
    public function store(Request $request)
    {
        $user = new User;
        $user->role = $request->role;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_karyawan = $request->no_karyawan;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/user');
    }
    public function edit($id)
    {
        $value = User::find($id);
        return view('user.edit',compact('value'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect('/user');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/user');
    }
}
