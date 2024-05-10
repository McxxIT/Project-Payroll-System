<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee's Payroll</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/style.css?v=<?php echo time(); ?>">
</head>

<body>

    <div class="employee-payroll">

        <!-- SIDEBAR PART -->

        <div class="sidebar-wrapper">
            <div class="sidebar-flex">

                <div class="brand">
                    <a href="payroll.php"><img src="/assets/imgs/brand.png" alt="MPS"></a>
                </div>

                <div class="sider-menu">
                    <a class="menu-background" href="{{ route('dashboard') }}"><i
                            class="bi bi-boxes"></i><span>Dashboard</span></a>
                    <a class="menu-background" href="{{ route('employee') }}"><i
                            class="bi bi-person-rolodex"></i><span>Employees</span></a>
                    <a class="menu-background" href="{{ route('applicant') }}"><i
                            class="bi bi-person-rolodex"></i><span>Applicant</span></a>
                    <a class="menu-background" href="{{ route('archive') }}"><i
                            class="bi bi-archive"></i><span>Archive</span></a>
                    <a class="menu-background" href="{{ route('payroll') }}"><i
                            class="bi bi-credit-card-2-front"></i><span>Payroll</span></a>
                    <a class="menu-background" href="{{ route('payroll-report') }}"><i
                            class="bi bi-file-earmark-post"></i></i><span>Payroll Report</span></a>
                    <a class="menu-background" href="{{ route('payslip') }}"><i
                            class="bi bi-wallet"></i><span>Payslip</span></a>
                    <a class="menu-background" href="{{ route('company') }}"><i
                            class="bi bi-buildings"></i><span>Company</span></a>
                </div>
            </div>
        </div>


        <!-- =====================TOP BAR================ -->

        <div class="topbar-wrapper">
            <div class="profile-wrapper">
                <div class="c-header-flex">
                    <span class="title">Dashboard</span>
                    <span class="greetings">Payroll Management</span>
                </div>
                <div class="profile">
                    <a href="{{ route('admin-profile') }}" class="name">Robert</a>
                    <a href="{{ route('admin-profile') }}"><img class="profile-link" src="/assets/imgs/pfp.jpg"></a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="out-flex-wrapper" onclick="event.preventDefault(); this.closest('form').submit();">
                            <span class="text-logout">Logout</span>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- ================MAIN CONTENT DATA=========== -->
        <div class="content-wrapper">
            <form action="{{ route('employee-payslip') }}" method="POST">
                @csrf
                <div class="payroll-wrapper">

                    <fieldset class="parent-card">
                        <legend class="card-header">Employee's Payroll</legend>
                        <div class="payroll-header">
                            <fieldset>
                                <legend class="card-header">Employee</legend>
                                <div class="card-body">
                                    <span>Employee ID: </span>
                                    <input type="number" class="form-control" value="{{ $employee->userID }}"
                                        disabled>
                                    <span>Employee Name</span>
                                    <input type="text" class="form-control"
                                        value="{{ $employee->firstname }} {{ $employee->lastname }}" disabled>
                                    <span>Department</span>
                                    <input type="text" class="form-control" value="{{ $employee->department }}"
                                        disabled>
                                    <span>Position</span>
                                    <input type="text" class="form-control" value="{{ $employee->position }}"
                                        disabled>

                                </div>
                            </fieldset>

                        </div>
                        <div class="payroll-body">



                            <fieldset class="card">
                                <legend class="card-header">Income</legend>
                                <div class="card-body">
                                    <span>Work days: </span>
                                    <input type="number" class="form-control" placeholder="0" name="workDays" id="workDaysInput" required>
                                    <span>Hourly Rate: </span>
                                    <input type="number" class="form-control" placeholder="0.00" name="hourlyRate" id="hourlyRateInput" required>
                                    <span>Hours Rendered: </span>
                                    <input type="number" class="form-control" placeholder="0" name="hoursRender" id="hoursRenderInput" required>
                                    <span>Total: </span>
                                    <input type="number" class="form-control" placeholder="0" name="totalIncome" id="totalIncomeInput" disabled>
                                </div>


                                <fieldset class="inside-card">
                                    <legend class="card-header">OT hrs./ Day</legend>
                                    <div class="card-body">
                                        <div class="card-body-flex">
                                            <span>Reqular OT: </span>
                                            <input type="number" class="form-control" placeholder="0.00" name="regularOT" id="regularOTInput">
                                            <span>Sunday OT: </span>
                                            <input type="number" class="form-control" placeholder="0.00" name="sundayOT" id="sundayOTInput">
                                            <span>Holiday OT: </span>
                                            <input type="number" class="form-control" placeholder="0.00" name="holidayOT" id="holidayOTInput">
                                        </div>

                                        <div class="card-body-flex">
                                            <span>Allowances: </span>
                                            <input type="number" class="form-control" placeholder="0.00" name="allowances" id="allowancesInput">
                                            <span>Incentives: </span>
                                            <input type="number" class="form-control" placeholder="0.00" name="incentives" id="incentivesInput">
                                            <span>Bonuses: </span>
                                            <input type="number" class="form-control" placeholder="0.00" name="bonuses" id="bonusesInput">
                                            <span>Total: </span>
                                            <input type="number" class="form-control" placeholder="0.00" name="totalOT" id="totalOTInput" disabled>
                                        </div>

                                    </div>
                                </fieldset>

                                <div class="total-footer">
                                    <span>Gross Salary: </span>
                                    <input type="number" class="form-control" placeholder="0.00" name="grossSalary" id="grossSalaryInput" disabled>
                                </div>


                            </fieldset>

                            <fieldset class="card">
                                <legend class="card-header">Deductions</legend>

                                <div class="card-body">
                                    <div class="card-body-flex">
                                        <div class="flex">
                                            <span>PhilHealth: </span>
                                            <input type="number" class="form-control" placeholder="0.00" name="philHealth" id="philHealthInput">
                                        </div>
                                        <div class="flex">
                                            <span>Pag-ibig: </span>
                                            <input type="number" class="form-control" placeholder="0.00" name="pagIbig" id="pagIbigInput">
                                        </div>
                                        <div class="flex">
                                            <span>SSS: </span>
                                            <input type="number" class="form-control" placeholder="0.00" name="sss" id="sssInput">
                                        </div>
                                    </div>
                                    <div class="card-body-flex">
                                        <div class="flex">
                                            <span>Lates: </span>
                                            <input type="number" class="form-control" placeholder="0" name="lates" id="latesInput">
                                        </div>
                                        <div class="flex">
                                            <span>Absents: </span>
                                            <input type="number" class="form-control" placeholder="0" name="absents" id="absentsInput">
                                        </div>
                                    </div>
                                </div>
                                <div class="total-footer">
                                    <span>Total Deductions: </span>
                                    <input type="number" class="form-control" placeholder="0" name="totalDeductions" id="totalDeductionsInput" disabled>
                                </div>


                            </fieldset>

                            <div class="content-foooter">
                                <span>TOTAL SALARY: </span>
                                <input type="number" class="form-control" placeholder="0.00" name="totalSalary" id="totalSalaryInput" disabled>
                            </div>

                        </div>
                    </fieldset>

                    <div class="btns">
                        <a href="../payroll.php"><button type="button">Cancel</button></a>
                        <a href="../payroll.php"><button type="submit">Submit</button></a>
                    </div>

                </div>


            </form>
        </div>

    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function updateTotalIncome() {
                var workDays = parseFloat(document.getElementById('workDaysInput').value) || 0;
                var hoursRender = parseFloat(document.getElementById('hoursRenderInput').value) || 0;
                var hourlyRate = parseFloat(document.getElementById('hourlyRateInput').value) || 0;
                var income = (hoursRender * hourlyRate) * workDays;
                document.getElementById('totalIncomeInput').value = income.toFixed(2);
                updateTotalIncomeAndOT();
                updateTotalSalary();
            }

            function updateTotalOT() {
                var regularOT = parseFloat(document.getElementById('regularOTInput').value) || 0;
                var sundayOT = parseFloat(document.getElementById('sundayOTInput').value) || 0;
                var holidayOT = parseFloat(document.getElementById('holidayOTInput').value) || 0;
                var allowances = parseFloat(document.getElementById('allowancesInput').value) || 0;
                var incentives = parseFloat(document.getElementById('incentivesInput').value) || 0;
                var bonuses = parseFloat(document.getElementById('bonusesInput').value) || 0;
                var totalOT = regularOT + sundayOT + holidayOT + allowances + incentives + bonuses;
                document.getElementById('totalOTInput').value = totalOT.toFixed(2);
                updateTotalIncomeAndOT();
            }

            function updateTotalIncomeAndOT() {
                var totalIncome = parseFloat(document.getElementById('totalIncomeInput').value) || 0;
                var totalOT = parseFloat(document.getElementById('totalOTInput').value) || 0;
                var totalIncomeAndOT = totalIncome + totalOT;
                document.getElementById('grossSalaryInput').value = totalIncomeAndOT.toFixed(2);
                updateTotalSalary(); 

            function updateTotalDeductions() {
                var philHealth = parseFloat(document.getElementById('philHealthInput').value) || 0;
                var pagIbig = parseFloat(document.getElementById('pagIbigInput').value) || 0;
                var sss = parseFloat(document.getElementById('sssInput').value) || 0;
                var lates = parseFloat(document.getElementById('latesInput').value) || 0;
                var absents = parseFloat(document.getElementById('absentsInput').value) || 0;
                var totalDeductions = philHealth + pagIbig + sss + lates + absents;
                document.getElementById('totalDeductionsInput').value = totalDeductions.toFixed(2);
                updateTotalSalary();
            }

            function updateTotalSalary() {
                var totalIncomeAndOT = parseFloat(document.getElementById('grossSalaryInput').value) || 0;
                var totalDeductions = parseFloat(document.getElementById('totalDeductionsInput').value) || 0;
                var overallSalary = totalIncomeAndOT - totalDeductions;
                document.getElementById('totalSalaryInput').value = overallSalary.toFixed(2);
            }

            document.getElementById('workDaysInput').addEventListener('input', updateTotalIncome);
            document.getElementById('hoursRenderInput').addEventListener('input', updateTotalIncome);
            document.getElementById('hourlyRateInput').addEventListener('input', updateTotalIncome);

            document.getElementById('regularOTInput').addEventListener('input', updateTotalOT);
            document.getElementById('sundayOTInput').addEventListener('input', updateTotalOT);
            document.getElementById('holidayOTInput').addEventListener('input', updateTotalOT);
            document.getElementById('allowancesInput').addEventListener('input', updateTotalOT);
            document.getElementById('incentivesInput').addEventListener('input', updateTotalOT);
            document.getElementById('bonusesInput').addEventListener('input', updateTotalOT);

            document.getElementById('philHealthInput').addEventListener('input', updateTotalDeductions);
            document.getElementById('pagIbigInput').addEventListener('input', updateTotalDeductions);
            document.getElementById('sssInput').addEventListener('input', updateTotalDeductions);
            document.getElementById('latesInput').addEventListener('input', updateTotalDeductions);
            document.getElementById('absentsInput').addEventListener('input', updateTotalDeductions);

            updateTotalIncome();
            updateTotalOT();
            updateTotalDeductions();
            updateTotalSalary(); 
        });
    </script>





</body>

</html>
