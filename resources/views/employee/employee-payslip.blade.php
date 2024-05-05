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
                    <a class="menu-background" href="{{ route ('employee-dashboard') }}"><i class="bi bi-boxes"></i><span>Dashboard</span></a>
                    <a class="menu-background active"><i class="bi bi-person-rolodex"></i><span>Payslip</span></a>
                    <a class="menu-background" href="{{ route ('employee-timekeeping') }}"><i class="bi bi-alarm"></i><span>Timekeeping</span></a>
                </div>
            </div>
        </div>

        <!-- =====================TOP BAR================ -->

        <div class="topbar-wrapper">
            <div class="profile-wrapper">

                <div class="c-header-flex">
                    <span class="title">Payroll Report</span>
                    <span class="greetings">Your Payroll/Payslip Report</span>
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

        {{-- ===================MAIN CONTENT===================== --}}

        <div class="content-wrapper">
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
                            <div class="emp-payslip-cell"></div>
                        </div>
                    </div>

                    <div class="table-body-3">
                        <div class="table-row-3">
                            <div class="emp-payslip-cell">123456</div>
                            <div class="emp-payslip-cell">12/01/2024</div>
                            <div class="emp-payslip-cell">12/31/2024</div>
                            <div class="emp-payslip-cell">58</div>
                            <div class="emp-payslip-cell">8.5</div>
                            <div class="emp-payslip-cell">24</div>
                            <div class="emp-payslip-cell"><a href="{{ route ('employee-details') }}">View Details</a></div>
                        </div>
                        <div class="table-row-3">
                            <div class="emp-payslip-cell">534215</div>
                            <div class="emp-payslip-cell">01/01/2025</div>
                            <div class="emp-payslip-cell">01/31/2025</div>
                            <div class="emp-payslip-cell">58</div>
                            <div class="emp-payslip-cell">8.5</div>
                            <div class="emp-payslip-cell">24</div>
                            <div class="emp-payslip-cell">View Details</div>
                        </div>
                        <div class="table-row-3">
                            <div class="emp-payslip-cell">654321</div>
                            <div class="emp-payslip-cell">02/01/2025</div>
                            <div class="emp-payslip-cell">02/31/2025</div>
                            <div class="emp-payslip-cell">58</div>
                            <div class="emp-payslip-cell">8.5</div>
                            <div class="emp-payslip-cell">24</div>
                            <div class="emp-payslip-cell">View Details</div>
                        </div>
                    </div>

                </div>

                <div class="table-footer">

                </div>

            </div>
        </div>



    </div>
</body>

</html>
