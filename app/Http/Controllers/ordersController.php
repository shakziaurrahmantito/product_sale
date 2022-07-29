<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderes;
use App\Models\supplier;
use App\Models\product;

class ordersController extends Controller
{


    public function order(){
        $getsupplier = supplier::orderBy("supplier_id","DESC")->get()->where("supplier_status", 1);
        $getproduct = product::orderBy("product_id","DESC")->get()->where("product_status", 1);
        $getorderes = orderes::orderBy("order_id","DESC")->first();
        return view("order", compact('getsupplier', 'getproduct','getorderes'));
    }


    public function orderInsert(Request $req){

        for ($i=0; $i < count($req->product_id); $i++) {

            orderes::insert([
                "supplier_id" => $req->supplier_id,
                "order_date" => $req->order_date,
                "order_no" => $req->order_no,
                "product_id" => $req->product_id[$i],
                "product_qty" => $req->order_qty[$i],
                "unit_price" => $req->order_price[$i]
            ]);

           
        }

        return redirect("/orderprint/$req->order_no");


    }

    public function printOption($id = null){

        if ($id !== null) {
     
            $getorderes             = orderes::orderBy("order_id","DESC")->where("order_no", $id)->first();

            $supplier_id            = $getorderes->supplier_id;
            $getsupplierInfo        = supplier::where("supplier_id", $supplier_id)->first();
            $getProduct_id_all      = orderes::orderBy("order_id","DESC")->where("order_no", $id)->get();

            return view("orderPrint",compact("getorderes","getsupplierInfo","getProduct_id_all"));

        }else{
            return redirect("/orderadd");
        }


    }



}
