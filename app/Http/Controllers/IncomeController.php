<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Income;



class IncomeController extends Controller
{
    public function getIncome(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'workDays' => 'required',
        //     'hourlyRate' => 'required',
        //     'hoursRendered' => 'required',
        //     'incomeTotal' => 'required',

        //     'RegOT' => 'required',
        //     'SunOT' => 'required',
        //     'HolOT' => 'required',
        //     'Allowances' => 'required',
        //     'Incentives' => 'required',
        //     'Bonuses' => 'required',
        //     'otTotal' => 'required',
        //     'grossSalary' => 'required',
        // ]);


        do {
            $income_id = rand(000000000, 999999999);
        } while (Income::where('income_id', $income_id)->exists());

        $income = new Income();
        $income->income_id = rand(000000000, 999999999);
        $income->userID = $request->employeeID;
        $income->workDays = $request->workDays;
        $income->hourlyRate = $request->hourlyRate;
        $income->hoursRendered = $request->hoursRendered;
        $income->totalIncome = $request->totalIncome;

        $income->RegOT = $request->RegOT;
        $income->SunOT = $request->SunOT;
        $income->HolOT = $request->HolOT;
        $income->Allowances = $request->Allowances;
        $income->Incentives = $request->Incentives;
        $income->Bonuses = $request->Bonuses;
        $income->otTotal = $request->otTotal;

        $income->philHealth = $request->philHealth;
        $income->pagIbig = $request->pagIbig;
        $income->sss = $request->sss;
        $income->totalDeduction = $request->totalDeduction;
        $income->totalSalary = $request->totalSalary;
        $income->grossSalary = $request->grossSalary;

        $income->datefrom = $request->datefrom;
        $income->dateto = $request->dateto;


        $income->save();
        return redirect()->route('payroll');
    }

    public function submitEmployeePayslip()
    {
        $submitEmployeePayslip = Income::all();
        return view('employee.employee-payslip')->with('submitEmployeePayslip', $submitEmployeePayslip);
    }

    public function viewEmployeePayslip()
    {
        $submitEmployeePayslipForAdmin = Income::all();
        return view('admin.view-employee-payslip', ['submitEmployeePayslipForAdmin' => $submitEmployeePayslipForAdmin])
        ->with('submitEmployeePayslipForAdmin', $submitEmployeePayslipForAdmin);
    }

}
