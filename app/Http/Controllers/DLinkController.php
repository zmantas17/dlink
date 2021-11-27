<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DLinkController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth', ['except']);
    }

    public function index()
    {
        return view('pages.home');
    }
    public function dashboard() 
    {
        return view('dashboard');
    }

    public function perform()
    {
        Auth::logout();
        
        return redirect('/');
    }
}
