<?php

namespace App\Http\Controllers;

use App\Models\DemoContract;
use App\Models\DemoDevice;
use Auth;
use Illuminate\Http\Request;

class DemoBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except']);
    }

    public function demoBase()
    {
        return view('pages.demo-base');
    }
    
    public function newDemoDevice(){
        return view("pages.add-demo-device");
    }

    public function storeDemoDevice(Request $request){
        $validated = $request->validate([
            'deviceProductNumber' => 'required',
            'deviceSerialNumber' => 'required',
            'description' => 'required',
        ]);

        DemoDevice::create([
            'deviceProductNumber' => request('deviceProductNumber'),
            'deviceSerialNumber' => request('deviceSerialNumber'),
            'description' => request('description'),
        ]);
        return redirect('/');
    }

    public function newDemoContract(){
        return view("pages.add-demo-contract");
    }

    public function storeDemoContract(Request $request){
        $validated = $request->validate([
            'client' => 'required',
            'deviceSerialNumber' => 'required',
            'date' => 'required',
            'number' => 'required',
        ]);

        DemoContract::create([
            'clientID' => request('client'),
            'deviceSerialNumber' => request('deviceSerialNumber'),
            'date' => request('date'),
            'number' => request('number'),
            'status' => False,
            'owner' => Auth::id(),
        ]);

        return redirect('/demo-base');
    }

    public function viewDemoContract(){
        $contracts = DemoContract::paginate(5);
        return view("pages.view-demo-contracts", compact('contracts'));
    }

    public function finishDemoContract(DemoContract $contract){
        $contract->status = True;
        $contract->save();

        return redirect('/view-demo-contract');
    }

    public function resumeDemoContract(DemoContract $contract){
        $contract->status = False;
        $contract->owner = Auth::id();
        $contract->save();
        
        return redirect('/view-demo-contract');
    }

    public function finishedDemoContract(){
        $contracts = DemoContract::where('status', True)->paginate(5);
        return view("pages.view-demo-contracts", compact('contracts'));
    }
    public function notFinishedDemoContract(){
        $contracts = DemoContract::where('status', False)->paginate(5);
        return view("pages.view-demo-contracts", compact('contracts'));
    }

    public function deleteDemoContract(DemoContract $contract)
    {
        $contract->delete();
        return redirect('/view-demo-contract');
    }
}
