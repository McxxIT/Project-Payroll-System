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
                    <a class="menu-background" href="{{ route('dashboard') }}"><i class="bi bi-boxes"></i><span>Dashboard</span></a>
                    <a class="menu-background" href="{{ route('employee') }}"><i class="bi bi-person-rolodex"></i><span>Employees</span></a>
                    <a class="menu-background" href="{{ route('applicant') }}"><i class="bi bi-person-rolodex"></i><span>Applicant</span></a>
                    <a class="menu-background" href="{{ route('archive') }}"><i class="bi bi-archive"></i><span>Archive</span></a>
                    <a class="menu-background" href="{{ route('payroll') }}"><i class="bi bi-credit-card-2-front"></i><span>Payroll</span></a>
                    <a class="menu-background" href="{{ route('payroll-report') }}"><i class="bi bi-file-earmark-post"></i></i><span>Payroll Report</span></a>
                    <a class="menu-background" href="{{ route('payslip') }}"><i class="bi bi-wallet"></i><span>Payslip</span></a>
                    <a class="menu-background" href="{{route('company')}}"><i class="bi bi-buildings"></i><span>Company</span></a>
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
            <form action="">

                <div class="payroll-wrapper">

                    <fieldset class="parent-card">
                        <legend class="card-header">Employee's Payroll</legend>
                        <div class="payroll-header">
                            <fieldset>
                                <legend class="card-header">Employee</legend>
                                <div class="card-body">
                                    <span>Employee ID: </span>
                                    <input type="number" class="form-control" placeholder="123456789">
                                    <span>Employee Name</span>
                                    <input type="text" class="form-control" placeholder="Robert Falle">
                                    <span>Position</span>
                                    <input type="text" class="form-control" placeholder="Clerk">
                                    <span>Department</span>
                                    <input type="text" class="form-control" placeholder="Front Desk">

                                </div>
                            </fieldset>

                        </div>
                        <div class="payroll-body">



                            <fieldset class="card">
                                <legend class="card-header">Income</legend>
                                <div class="card-body">
                                    <span>Work days: </span>
                                    <input type="number" class="form-control" placeholder="0">
                                    <span>Hourly Rate: </span>
                                    <input type="number" class="form-control" placeholder="0.00">
                                    <span>Hours Rendered: </span>
                                    <input type="number" class="form-control" placeholder="0">
                                    <span>Total: </span>
                                    <input type="number" class="form-control" placeholder="0.00" disabled>
                                </div>


                                <fieldset class="inside-card">
                                    <legend class="card-header">OT hrs./ Day</legend>
                                    <div class="card-body">
                                        <div class="card-body-flex">
                                            <span>Reqular OT: </span>
                                            <input type="number" class="form-control" placeholder="0.00">
                                            <span>Sunday OT: </span>
                                            <input type="number" class="form-control" placeholder="0.00">
                                            <span>Holiday OT: </span>
                                            <input type="number" class="form-control" placeholder="0.00">
                                        </div>

                                        <div class="card-body-flex">
                                            <span>Allowances: </span>
                                            <input type="number" class="form-control" placeholder="0.00">
                                            <span>Incentives: </span>
                                            <input type="number" class="form-control" placeholder="0.00">
                                            <span>Bonuses: </span>
                                            <input type="number" class="form-control" placeholder="0.00">
                                            <span>Total: </span>
                                            <input type="number" class="form-control" placeholder="0.00" disabled>
                                        </div>

                                    </div>
                                </fieldset>

                                <div class="total-footer">
                                    <span>Gross Salary: </span>
                                    <input type="number" class="form-control" placeholder="0.00" disabled>
                                </div>


                            </fieldset>

                            <fieldset class="card">
                                <legend class="card-header">Deductions</legend>

                                <div class="card-body">
                                    <div class="card-body-flex">
                                        <div class="flex">
                                            <span>PhilHealth: </span>
                                            <input type="number" class="form-control" placeholder="0.00">
                                        </div>
                                        <div class="flex">
                                            <span>Pag-ibig: </span>
                                            <input type="number" class="form-control" placeholder="0.00">
                                        </div>
                                        <div class="flex">
                                            <span>SSS Loans: </span>
                                            <input type="number" class="form-control" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="card-body-flex">
                                        <div class="flex">
                                            <span>Lates: </span>
                                            <input type="number" class="form-control" placeholder="0">
                                        </div>
                                        <div class="flex">
                                            <span>Absents: </span>
                                            <input type="number" class="form-control" placeholder="0">
                                        </div>


                                    </div>



                                </div>

                                <div class="total-footer">
                                    <span>Total Deductions: </span>
                                    <input type="text" class="form-control" placeholder="0" disabled>
                                </div>


                            </fieldset>

                            <div class="content-foooter">
                                <span>TOTAL SALARY: </span>
                                <input type="text" class="form-control" placeholder="0.00" disabled>

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

</body>

</html>
