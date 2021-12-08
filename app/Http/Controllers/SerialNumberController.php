<?php

namespace App\Http\Controllers;

use App\Models\SerialNumber;
use Auth;
use Illuminate\Http\Request;

class SerialNumberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except']);
    }

    public function viewSerialNumber()
    {
        return view('pages.serial-number');
    }

    public function storeSNFile(Request $request)
    {
        $path = $request->file('file')->store('public/sn');
        $filename = str_replace('public/',"",$path);

        SerialNumber::create([
            'name' => $filename
        ]);

        return redirect('/');
    }
}
