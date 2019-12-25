<?php

namespace App\Http\Controllers\Api;

use App\Models\Detail;
use App\Http\Controllers\BaseController;
use App\Http\Requests\DetailRequest;

class DetailController extends BaseController
{
    public function index()
    {
        $details = Detail::all();
        return $this->sendResponse($details,"LIST OF DETAILS SUCCESSFULLY RETRIEVED",200);
    }

    public function store(DetailRequest $request)
    {
        $detail = Detail::create($request->all());
        return $this->sendResponse($detail,"CREATED DETAILS",201);
    }

    public function show(Detail $detail)
    {
        return $this->sendResponse($detail,"RETRIEVED DETAIL",200);
    }

    public function update(DetailRequest $request, Detail $detail)
    {
        $detail->update($request->all());
        return $this->sendResponse($detail,"UPDATED DETAIL",201);
    }

    public function destroy(Detail $detail)
    {
        $detail->delete();
        return $this->sendResponse($detail,"DELETED DETAIL",200);
    }
}
