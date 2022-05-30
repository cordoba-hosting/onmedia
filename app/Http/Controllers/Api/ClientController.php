<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;



class ClientController extends Controller
{
   
    public function index()
    {
        $clients = Client::all();
        return $clients;
    }

    
    public function store(Request $request)
    {
        $client = new Client();

        $client->firstName = $request->firstName;
        $client->lastName = $request->lastName;
        $client->cuit = $request->cuit;
        $client->email = $request->email;
        $client->email_2 = $request->email_2;
        $client->email_3 = $request->email_3;
        $client->tel_1 = $request->tel_1;
        $client->tel_2 = $request->tel_2;
        $client->tel_3 = $request->tel_3;
        $client->comments = $request->comments;
        $client->deleted = $request->deleted;

        $client->save();

        return $client;

    }

   
    public function show($id)
    {
        $client = Client::find($id);
        return $client;
    }

  
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $client->firstName = $request->firstName;
        $client->lastName = $request->lastName;
        $client->cuit = $request->cuit;
        $client->email = $request->email;
        $client->email_2 = $request->email_2;
        $client->email_3 = $request->email_3;
        $client->tel_1 = $request->tel_1;
        $client->tel_2 = $request->tel_2;
        $client->tel_3 = $request->tel_3;
        $client->comments = $request->comments;
        $client->deleted = $request->deleted;

        $client->save();

        return $client;
    }

    public function destroy($id)
    {
        $client = Client::destroy($id);
        return $client;
    }
}
