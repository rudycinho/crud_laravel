<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class ClientController extends BaseController
{
    
    public function index()
    {
        $clients = Client::all();
        return $this->sendResponse($clients,"LIST OF CLIENTS SUCCESSFULLY RETRIEVED");
    }

    public function store(Request $request)
    {
        $client = Client::create($request->all());
        return $this->sendResponse($client,"CREATED CLIENT");
    }

    public function show(Client $client)
    {
        return $this->sendResponse($client,"RETRIEVED CLIENT");
    }

    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return $this->sendResponse($client,"UPDATED CLIENTE");
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return $this->sendResponse($client,"DELETED CLIENTE");
    }
}