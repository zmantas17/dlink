<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use DB;

class ClientController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth', ['except']);
    }

    public function allClients()
    {
        $clients = Client::all();
        return view('pages.view-clients', compact('clients'));
    }

    public function newClientForm()
    {
        return view('pages.add-client');
    }

    public function storeClient(Request $request)
    {
            $validated = $request->validate([
                'name' => 'required|max:255',
                'address' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'contactName' => 'required',
                'contactPhone' => 'required',
                'notes' => 'required'
            ]);

            Client::create([
                'name' => request('name'),
                'address' => request('address'),
                'phone' => request('phone'),
                'email' => request('email'),
                'contactName' => request('contactName'),
                'contactPhone' => request('contactPhone'),
                'notes' => request('notes'),
                'owner' => Auth::id()
            ]);
            return redirect('/clients');
}
    
    public function viewRemoveClientForm(Client $client) 
    {
            return view('pages.view-remove-client', compact('client'));
    }

    public function deleteClientForm(Client $client)
    {
        $client->delete();
        return redirect('/');
    }

    public function viewEditClientForm(Client $client)
    {
        return view("pages.client-form-edit", compact('client'));
    }

    public function updateClientForm(Request $request, Client $client)
    {
            $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'contactName' => 'required',
            'contactPhone' => 'required',
            'notes' => 'required'
            ]);

            Client::where('id', $client->id)->update($request->only(['name', 'address', 'phone', 'email', 'contactName', 'contactPhone', 'notes']));
            Client::where('id', $client->id)->update(['owner' => Auth::id()]);

            return redirect('/clients');
    }

    public function askSearchClient(Request $request)
    {
        return redirect('/search-client/' . $request->get('search-string'));
    }
    public function searchClient($searchString)
    {
        $clients = Client::where(DB::raw('lower(name)'), 'LIKE', '%' . strtolower($searchString) . '%')->get();


        return view('pages.view-clients', compact('clients'));
    }
}
