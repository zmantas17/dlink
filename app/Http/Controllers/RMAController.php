<?php

namespace App\Http\Controllers;

use App\Models\Rma;
use Auth;
use Illuminate\Http\Request;

class RMAController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except']);
    }

    public function viewRmaBases(){
        $rmas = Rma::paginate(5);
        return view('pages.view-all-rma-bases', compact('rmas'));
    }

    public function newRmaBaseForm()
    {
        return view('pages.add-rma-base');
    }

    public function storeRmaBase(Request $request)
    {
            $validated = $request->validate([
                'name' => 'required|max:255',
                'phone' => 'required',
                'deviceProductNumber' => 'required',
                'deviceSerialNumber' => 'required',
                'description' => 'required',
            ]);

            Rma::create([
                'name' => request('name'),
                'phone' => request('phone'),
                'deviceProductNumber' => request('deviceProductNumber'),
                'deviceSerialNumber' => request('deviceSerialNumber'),
                'description' => request('description'),
                'owner' => Auth::id(),
            ]);
            return redirect('/rma');
    }

    public function viewRemoveRmaBaseForm(Rma $rma) 
    {
            return view('pages.view-base-remove', compact('rma'));
    }

    public function deleteRmaBaseForm(Rma $rma)
    {
        $rma->delete();
        return redirect('/');
    }

    public function viewEditRmaBaseForm(Rma $rma)
    {
        return view("pages.rma-base-form-edit", compact('rma'));
    }

    public function updateRmaBaseForm(Request $request, Rma $rma)
    {
            $validated = $request->validate([
                'name' => 'required|max:255',
                'phone' => 'required',
                'deviceProductNumber' => 'required',
                'deviceSerialNumber' => 'required',
                'description' => 'required',
            ]);

            Rma::where('id', $rma->id)->update($request->only(['name', 'phone', 'deviceProductNumber', 'deviceSerialNumber', 'description']));

            return redirect('/rma');
    }

    public function viewRmaBase(Rma $rma)
    {
        return view("pages.view-rma-base", compact('rma'));
    }
}
