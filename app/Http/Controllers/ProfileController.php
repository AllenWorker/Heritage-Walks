<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile');
    }

    public function store(Request $request)
    {
        $validated = request()->validate([
            'name' => ['required'],
            'email' => ['required'],

        ]);
        $user = Auth::user();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        return redirect('/profile');
    }

}
