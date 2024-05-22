<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payslip</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
</head>

<body>

    <div class="employee_c">

        <div class="sidebar-wrapper">
            <div class="sidebar-flex">

                <div class="brand">
                    <a href="dashboard.php"><img src="/assets/imgs/brand.png" alt="MPS"></a>
                </div>

                <div class="sider-menu">
                    <a class="menu-background" href="{{ route('dashboard') }}">
                        <i class="bi bi-boxes"></i>
                        <span>Dashboard</span></a>
                    <a class="menu-background" href="{{ route('employee') }}">
                        <i class="bi bi-person-rolodex"></i>
                        <span>Employees</span></a>
                    <a class="menu-background" href="{{ route('applicant') }}">
                        <i class="bi bi-person-rolodex"></i>
                        <span>Applicant</span></a>
                    <a class="menu-background" href="{{ route('archive') }}">
                        <i class="bi bi-archive"></i>
                        <span>Archive</span></a>
                    <a class="menu-background" href="{{ route('payroll') }}">
                        <i class="bi bi-credit-card-2-front"></i>
                        <span>Payroll</span></a>
                    <a class="menu-background" href="{{ route('payroll-report') }}">
                        <i class="bi bi-file-earmark-post"></i>
                        <span>Payroll Report</span></a>
                    <a class="menu-background" href="{{ route('payslip') }}">
                        <i class="bi bi-wallet"></i>
                        <span>Payslip</span>
                    </a>
                    <a class="menu-background" href="{{ route('company') }}">
                        <i class="bi bi-buildings"></i>
                        <span>Company</span>
                    </a>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="logout">
                    @csrf
                    <div class="out-flex-wrapper" onclick="event.preventDefault(); this.closest('form').submit();">
                        <span class="text-logout">Logout</span>
                    </div>
                </form>
            </div>
        </div>



        <!-- =====================TOP BAR================ -->

        <div class="topbar-wrapper">
            <div class="profile-wrapper">
                <div class="sidebar-toggle" id="sidebarToggle">
                    <i class="bi bi-list"></i>
                </div>
                <div class="c-header-flex">
                    <span class="title">Employee</span>
                    <span class="greetings">&nbsp;</span>
                </div>
                <div class="profile">
                    <a href="{{ route('admin-profile') }}" class="name">Robert</a>

                </div>
                <div class="menu">
                    <div class="menu-flex">
                        <div class="info">
                            <a href="" class="view-person">
                                <span>
                                    <span class="">Robert</span>
                                </span>
                            </a>
                        </div>
                        <a href="{{ route('dashboard') }}" class="menu-item">
                            <i class="bi bi-boxes"></i>
                            <span>Dashboard</span></a>
                        </a>
                        <a href="{{ route('employee') }}" class="menu-item act">
                            <i class="bi bi-person-rolodex"></i>
                            <span>Employees</span></a>
                        </a>
                        <a href="{{ route('applicant') }}" class="menu-item">
                            <i class="bi bi-person-rolodex"></i>
                            <span>Applicant</span></a>
                        </a>
                        <a href="{{ route('archive') }}" class="menu-item">
                            <i class="bi bi-archive"></i>
                            <span>Archive</span></a>
                        </a>
                        <a href="{{ route('payroll') }}" class="menu-item">
                            <i class="bi bi-credit-card-2-front"></i>
                            <span>Payroll</span></a>
                        </a>
                        <a href="{{ route('payroll-report') }}" class="menu-item">
                            <i class="bi bi-file-earmark-post"></i>
                            <span>Payroll Report</span></a>
                        </a>
                        <a href="{{ route('payslip') }}" class="menu-item">
                            <i class="bi bi-wallet"></i>
                            <span>Payslip</span>
                        </a>
                        <a href="{{ route('company') }}" class="menu-item">
                            <i class="bi bi-buildings"></i>
                            <span>Company</span>
                        </a>
                        <div class="info">
                            <form method="POST" action="{{ route('logout') }}" class="form"
                                onclick="event.preventDefault(); this.submit();">
                                @csrf
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        {{-- ===================MAIN CONTENT===================== --}}

        <div class="content-wrapper">
            <div class="back">
                <a href="{{ route('payslip') }}" class="back-button"
                    style="text-decoration: none; 
                    color: inherit; 
                    display: flex; 
                    align-items: 
                    center; 
                    gap: 5px; 
                    font-weight: 500; 
                    padding: 10px">
                    <i class="bi bi-arrow-left"></i>
                    <span>Back</span>
                </a>
            </div>
            <div class="data-3">
                <div class="table-3">
                    <div class="table-header-3">
                        <div class="table-row-3">
                            <div class="emp-payslip-cell">Ref. no.</div>
                            <div class="emp-payslip-cell">Period From</div>
                            <div class="emp-payslip-cell">Period to</div>
                            <div class="emp-payslip-cell">Hourly Rate</div>
                            <div class="emp-payslip-cell">Hours Rendered</div>
                            <div class="emp-payslip-cell">Working Days</div>
                            <div class="emp-payslip-cell">Action</div>
                        </div>
                    </div>

                    <div class="table-body-3">
                        @foreach ($employeePayslips as $employeePayslip)
                            <form class="table-row-3" action="/view-employee-payslip-details/{{ $employeePayslip->income_id }}"
                                method="POST">
                                @csrf
                                <div class="emp-payslip-cell">{{ $employeePayslip->income_id }}</div>
                                <div class="emp-payslip-cell">{{ $employeePayslip->datefrom }}</div>
                                <div class="emp-payslip-cell">{{ $employeePayslip->dateto }}</div>
                                <div class="emp-payslip-cell">{{ $employeePayslip->hourlyRate }}</div>
                                <div class="emp-payslip-cell">{{ $employeePayslip->hoursRendered }}</div>
                                <div class="emp-payslip-cell">{{ $employeePayslip->workDays }}</div>
                                <div class="emp-payslip-cell"><button type="submit">View Details</button></div>
                            </form>
                        @endforeach
                    </div>

                </div>

                <div class="table-footer">

                </div>

            </div>
        </div>



    </div>
</body>

</html>
