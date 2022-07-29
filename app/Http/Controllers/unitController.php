<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\unit;

class unitController extends Controller
{

    public function unit(){
        $getunit = unit::orderBy("unit_id","DESC")->get();
        return view("unitAdd",compact('getunit'));
    }

    public function unitInsert(Request $req){
        $unit = new unit();
        $unit->unit_name = $req->unit_name;
        $unit->unit_status = $req->unit_status;
        $unit->save();
        return redirect()->back();
    }
}
