<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Client;
use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;
class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::get();
        return view('admin.sale.index', compact('sales'));
    }

    public function create()
    {
        $clients = Client::get();
        return view('admin.sale.create', compact('clients'));
    }

    public function store(StoreRequest $request)
    {
        $sale = Sale::create($request->all());
        foreach($request->product_id as $key => $sos){
            $results[] = array("product_id"=>$request->product_id[$key],
            "quatity"=>$request->quatity[$key],
            "price"=>$request->price[$key],
            "discount"=>$request->discount[$key],
            );
        }
        $sale->saleDetails()->createMany($results);
        return redirect()->route('sales.index');
    }

    public function show(Sale $sale)
    {
        return view('admin.sale.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $clients = Client::get();
        return view('admin.sale.show', compact('sale'));
    }

    public function update(UpdateRequest $request, Sale $sale)
    {
        // $sale->update($request->all());
        // return redirect()->route('sales.index');
    }

    public function destroy(Sale $sale)
    {
        // $categor->delete();
        // return redirect()->route('sales.index');
    }
}