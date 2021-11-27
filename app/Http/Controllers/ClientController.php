<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

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
            'notes' => request('notes')
        ]);
        return redirect('/');
    }
    
    //! Are you sure delete?
    public function viewRemoveClientForm(Client $client) 
    {
        return view('pages.view-remove', compact('client'));
    }

    //! Remove
    public function deleteClientForm(Client $client)
    {
        $client->delete();
        return redirect('/');
    }

    //! Edit
    public function viewEditClientForm(Client $client)
    {
        return view("pages.client-form-edit", compact('client'));
    }

    //! Update
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

            return redirect('/clients');
    }
}
