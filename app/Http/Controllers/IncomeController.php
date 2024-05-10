<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    public function getIncome(Request $request,$id): RedirectResponse
    {
        $request->validate([
            'workDays' => 'required',
            'hourlyRate' => 'required',
            'hoursRendered' => 'required',
            'incomeTotal' => 'required',

            'RegOT' => 'required',
            'SunOT' => 'required',
            'HolOT' => 'required',
            'Allowances' => 'required',
            'Incentives' => 'required',
            'Bonuses' => 'required',
            'otTotal' => 'required',
            'grossSalary' => 'required',
        ]);

        $income = Income::create([
            'workDays' => $request->workDays,
            'hourlyRate'=> $request->hourlyRate,
            'hoursRendered' => $request->hoursRendered,
            'incomeTotal' => $request->incomeTotal,

            'RegOT' => $request->RegOT,
            'SunOT' => $request->SunOT,
            'HolOT' => $request->HolOT,
            'Allowances' => $request->Allowances,
            'Incentives' => $request->Incentives,
            'Bonuses' => $request->Bonuses,
            'otTotal' => $request->otTotal,
            'grossSalary' => $request->grossSalary,
        ]);

        return redirect()->route('admin.payroll');
    }
}
