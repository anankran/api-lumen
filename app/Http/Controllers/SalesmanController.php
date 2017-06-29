<?php

namespace App\Http\Controllers;

use App\Salesman;
use Illuminate\Http\Request;

class SalesmanController extends Controller
{
    public function newSalesman(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $commission = 8.5;
        $records = Salesman::create(['name' => $name, 'email' => $email, 'commission' => $commission]);
        return response()->json(['id' => $records->id, 'name' => $records->name, 'email' => $records->email]);
    }

    public function getSalesman()
    {
        $records = Salesman::getSalesman();
        return response()->json($records);
    }
}
