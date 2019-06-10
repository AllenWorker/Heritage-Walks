<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    /**
     * Shows home page once user has login
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        if(Auth::check() == false){
            return view('auth.login');
        }
        else
        {
            return view('pages.welcome');
        }

    }
}
