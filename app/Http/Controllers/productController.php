<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\unit;

class productController extends Controller
{

    public function product(){
        $getproduct = product::orderBy("product_id","DESC")->get();
        $getunit = unit::orderBy("unit_id","DESC")->get()->where("unit_status", 1);
        return view("productadd",compact('getunit','getproduct'));
    }

    public function productInsert(Request $req){
        $product = new product();
        $product->product_name = $req->product_name;
        $product->product_unit = $req->product_unit;
        $product->product_code = $req->product_code;
        $product->product_description = $req->product_description;
        $product->product_status = $req->product_status;
        $product->save();
        return redirect()->back();
    }
}
