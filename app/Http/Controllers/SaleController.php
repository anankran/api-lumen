<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Salesman;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function newSale(Request $request)
    {
        $value = $request->value;
        $salesmanID = $request->salesman;
        $salesman = Salesman::find($request->salesman);
        $commission = $salesman->commission * $request->value / 100;
        $records = Sale::create(['salesman' => $salesmanID, 'value' => $value, 'commission' => $commission]);
        return response()->json(['id' => $records->id, 'salesmanName' => $salesman->name, 'salesmanEmail' => $salesman->email, 'value' => $records->value, 'commission' => $records->commission, 'saleDate' => $records->created_at]);
    }

    public function getSale(Int $id)
    {
      $records = Sale::getSale($id);
      return response()->json($records);
    }
}
