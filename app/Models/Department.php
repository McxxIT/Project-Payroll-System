<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $primaryKey = 'department_id';

    protected $table = "departments";
    protected $fillable = [
        "department_name",
        "department_id",
        "is_active",
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'department_id', 'department_id');
    }
}
