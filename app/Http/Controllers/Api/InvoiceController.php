<?php

namespace App\Http\Controllers\Api;

use App\Models\Invoice;
use App\Http\Controllers\BaseController;
use App\Http\Requests\InvoiceRequest;

class InvoiceController extends BaseController
{
    public function index()
    {
        $invoices = Invoice::all();
        return $this->sendResponse($invoices,"LIST OF INVOICES SUCCESSFULLY RETRIEVED",200);
    }
    
    public function store(InvoiceRequest $request)
    {
        $invoice = Invoice::create($request->all());
        return $this->sendResponse($invoice,"CREATED INVOICES",201);
    }

    public function show(Invoice $invoice)
    {
        return $this->sendResponse($invoice,"RETRIEVED INVOICE",200);
    }

    public function update(InvoiceRequest $request, Invoice $invoice)
    {
        $invoice->update($request->all());
        return $this->sendResponse($invoice,"UPDATED INVOICE",201);
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return $this->sendResponse($invoice,"DELETED INVOICE",200);
    }
}
