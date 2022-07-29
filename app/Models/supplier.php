<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{

    public $table = "suppliers";
    public $fillable = [
        "supplier_name",
        "supplier_mobile",
        "supplier_address",
        "supplier_status"
    ];

    public $primarykey = "supplier_id";
    public $timestamps = true;
}
