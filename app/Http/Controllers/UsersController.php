<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;
class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }
    public function show(User $user)
		{
    	//return view('users.show', compact('user'));
    	//print_r(compact('user'));
    	return view('users.show', compact('user'));
		}
		
	public function store(Request $request)
    {
        $a = $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
				Auth::login($user);
        return redirect()->route('users.show', [$user]);
    }
}
