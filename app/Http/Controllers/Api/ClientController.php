<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use App\Http\Controllers\BaseController;
use App\Http\Requests\ClientRequest;

class ClientController extends BaseController
{
    
    public function index()
    {
        $clients = Client::all();
        return $this->sendResponse($clients,"LIST OF CLIENTS SUCCESSFULLY RETRIEVED",200);
    }

    public function store(ClientRequest $request)
    {

        $client = Client::create($request->all());
        return $this->sendResponse($client,"CREATED CLIENT",201);
    }

    public function show(Client $client)
    {
        //if($client!==null){
            return $this->sendResponse($client,"RETRIEVED CLIENT",200);
        //}else{
        //    return $this->sendError("CLIENT NOT FOUND",404);
        //}
    }

    public function update(ClientRequest $request, Client $client)
    {
        $client->update($request->all());
        return $this->sendResponse($client,"UPDATED CLIENTE",201);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return $this->sendResponse($client,"DELETED CLIENTE",200);
    }
}
