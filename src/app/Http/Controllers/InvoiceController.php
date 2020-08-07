<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $facturas = Invoice::with('user', 'zones')
            ->limit(5)
            ->orderBy('id', 'DESC')->get();

        //dd($facturas);
        return View('facturas.index', compact('facturas'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $factura = Invoice::where('id', $id)
            ->with('user', 'products.product', 'zones')->first();
        return response()->json($factura, 200);
    }
}
