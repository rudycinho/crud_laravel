<?php

namespace App\Http\Controllers;

use App\Models\PaymentMode;
use App\Http\Controllers\BaseController;
use App\Http\Requests\PaymentMode\StoreRequest;
use App\Http\Requests\PaymentMode\UpdateRequest;

class PaymentModeController extends BaseController
{
    public function index()
    {
        $paymentModes = PaymentMode::all();
        return $this->sendResponse($paymentModes,"LIST OF PAYMENT METHODS SUCCESSFULLY RETRIEVED",200);
    }

    public function store(StoreRequest $request)
    {
        $paymentMode = PaymentMode::create($request->all());
        return $this->sendResponse($paymentMode,"CREATED PAYMENT METHODS",201);
    }

    public function show(PaymentMode $paymentMode)
    {
        return $this->sendResponse($paymentMode,"RETRIEVED PAYMENT METHODS",200);
    }

    public function update(UpdateRequest $request, PaymentMode $paymentMode)
    {
        $paymentMode->update($request->all());
        return $this->sendResponse($paymentMode,"UPDATED PAYMENT METHODS",201);
    }

    public function destroy(PaymentMode $paymentMode)
    {
        $paymentMode->delete();
        return $this->sendResponse($paymentMode,"DELETED PAYMENT METHODS",200);
    }
}
