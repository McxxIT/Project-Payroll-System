<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\User;
use App\Models\Department;
use App\Models\Position;
use Illuminate\Support\Facades\Auth;



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

        $income->grossSalary = $request->grossSalary;

        $income->totalSalary = $request->totalSalary;


        $income->datefrom = $request->datefrom;
        $income->dateto = $request->dateto;


        $income->save();
        return redirect()->route('payroll');
    }

    public function submitEmployeePayslip()
    {
        $submitEmployeePayslip = Income::all();
        $user = Auth::user();
        $name = $user->username;
        return view('employee.employee-payslip')->with('user_name', $name)->with('submitEmployeePayslip', $submitEmployeePayslip);
    }

    public function getEmployeeForPayslip ($id) {
        $employeePayslips = Income::where('userID', $id)->get();
        $user = Auth::user();
        $name = $user->username;
        return view('admin.view-employee-payslip')->with('user_name', $name)->with('employeePayslips', $employeePayslips);
    }

    // public function payrollEmployeeDetails ($id) {
    //     $employee = User::where('userID', $id)->first();
    //     $departments = Department::where('is_active',1)->get();
    //     $positions = Position::where('is_active',1)->get();
    //     $employeeDetails = Income::where('userID', $id)->get();
    //     $income = Income::where('userID', $id)->first();
    //     return view('admin.view-employee-payslip-details')->with('employeeDetails', $employeeDetails)
    //     ->with('positions', $positions)
    //     ->with('departments', $departments)
    //     ->with('employee', $employee)
    //     ->with('income', $income);
    // }

}
