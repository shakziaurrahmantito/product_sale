<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class supplierController extends Controller
{
    public function supplier(){
        $getsupplier = supplier::orderBy("supplier_id","DESC")->get();
        return view("supplierAdd",compact('getsupplier'));
    }

    public function supplierInsert(Request $req){
        $supplier = new supplier();
        $supplier->supplier_name = $req->supplier_name;
        $supplier->supplier_company = $req->supplier_company;
        $supplier->supplier_mobail = $req->supplier_mobail;
        $supplier->supplier_address = $req->supplier_address;
        $supplier->supplier_status = $req->supplier_status;
        $supplier->save();
        return redirect()->back();
    }

}
