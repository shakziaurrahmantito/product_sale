<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderes extends Model
{
    public $table = "orderes";
    public $fillable = [
        "order_no",
        "order_date",
        "product_id",
        "product_qty",
        "unit_price",
        "supplier_id"
    ];
    
    public $primarykey = "order_id";
    public $timestamps = true;
}
