<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $table = 'income';
    protected $fillable = [
        'userID',
        'workDays',
        'hourlyRate',
        'hoursRendered',
        'totalIncome',

        'RegOT',
        'SunOT',
        'HolOT',
        'Allowances',
        'Incentives',
        'Bonuses',
        'otTotal',
        'grossSalary',

        'datefrom',
        'dateto',
    ];
}
