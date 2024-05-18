<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $table = "shift";
    protected $fillable = [
        "workshift_id",
        "shift_start",
        "shift_end"
    ];
}
