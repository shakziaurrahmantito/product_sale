<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    public $table = "units";
    public $fillable = [
        "unit_name",
        "unit_status"
    ];
    public $primarykey = "unit_id";
    public $timestamps = true;
}
