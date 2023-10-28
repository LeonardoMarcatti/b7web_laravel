<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoices;

class InvoicesController extends Controller
{
    public function index()
    {
        return Invoices::all();
    }

    public function getByID(Request $r)
    {
        $invoice = Invoices::find($r->id);
        if (!empty($invoice)) {
            $invoice['user'] = $invoice->user;
            $invoice['address'] = $invoice->address;
        };
        
        return $invoice ? $invoice : 'Não existe invoice com esse ID';
    }

    public function create(Request $r)
    {
        $data = $r->all();
        $invoice = new Invoices($data);

        try {
            $invoice->save();
            return 'Invoice saved successfully';
        } catch (\Throwable $th) {
            return 'Error on ' . $th->getMessage();
        }
    }

    public function getByUserID(Request $r)
    {
        $id = $r->id;
        return Invoices::where('user_id', '=', $id)->get();
    }

    public function getByAddressID(Request $r)
    {
        $id = $r->id;
        return Invoices::where('address_id', '=', $id)->get();
    }

    public function getAddress(Request $r)
    {
        $invoice = Invoices::find($r->address_id);
        $invoice['address'] = $invoice->address;
        return $invoice;
    }

    public function getUser(Request $r)
    {
        $invoice = Invoices::find($r->user_id);
        $invoice['user'] = $invoice->user;
        return $invoice;
    }

    public function delete(Request $r)
    {
        $id = $r->id;
        $delete = Invoices::find($id);
        return ($delete) ? $delete->delete($id) : 'Invoice not found' ;
    }
}
