<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $table = 'income';
    protected $fillable = [
        'income_id',
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
        'totalDeduction',
        'totalSalary',
        'grossSalary',

        'datefrom',
        'dateto',
    ];


    public function users()
    {
        return $this->belongsTo(User::class, 'userID');
    }
}
