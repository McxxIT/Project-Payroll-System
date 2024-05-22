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
                    <a class="menu-background" href="{{ route('employee-dashboard') }}">
                        <i class="bi bi-boxes"></i>
                        <span>Dashboard</span></a>
                    <a class="menu-background active">
                        <i class="bi bi-person-rolodex"></i>
                        <span>Payslip</span></a>
                    <a class="menu-background"href="{{ route('employee-timekeeping') }}">
                        <i class="bi bi-alarm"></i>
                        <span>Timekeeping</span></a>
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
                    <span class="title">Dashboard</span>
                    <span class="greetings">Hello, Robert! Welcome Back!</span>
                </div>
                <div class="profile">
                    <a href="{{ route('employee-profile') }}" class="name">Robert</a>

                </div>
                <div class="menu">
                    <div class="menu-flex">
                        <div class="info">
                            <a href="{{ route('employee-profile') }}" class="view-person">
                                <span>
                                    <span class="">Robert</span>
                                </span>
                            </a>
                        </div>
                        <a class="menu-item">
                            <i href="{{ route('employee') }}" class="bi bi-boxes"></i>
                            <span>Dashboard</span></a>
                        </a>
                        <a class="menu-item active">
                            <i class="bi bi-person-rolodex"></i>
                            <span>Payslip</span></a>
                        </a>
                        <a href="{{ route('employee-timekeeping') }}" class="menu-item">
                            <i class="bi bi-person-rolodex"></i>
                            <span>Timekeeping</span></a>
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
            <div class="data-3">
                <div class="table-3">
                    <div class="table-header-3">
                        <div class="table-row-3">
                            <div class="emp-payslip-cell" style="width: 10%;
                            min-width: 100px;">Ref. no.</div>
                            <div class="emp-payslip-cell" style="width: 15%;
                            min-width: 150px;">Period From</div>
                            <div class="emp-payslip-cell" style="width: 15%;
                            min-width: 150px;">Period to</div>
                            <div class="emp-payslip-cell" style="width: 15%;
                            min-width: 150px;">Hourly Rate</div>
                            <div class="emp-payslip-cell" style="width: 20%;
                            min-width: 200px;">Hours Rendered</div>
                            <div class="emp-payslip-cell" style="width: 15%;
                            min-width: 150px;">Working Days</div>
                            <div class="emp-payslip-cell" style="width: 10%;
                            min-width: 100px;">Action</div>
                        </div>
                    </div>

                    <div class="table-body-3">
                        @foreach ($submitEmployeePayslip as $submitPayslip)
                            <form class="table-row-3" action="/employee/payslip/details/{{ $submitPayslip->income_id }}" method="POST">
                                @csrf
                                <div class="emp-payslip-cell" style="width: 10%;
                                min-width: 100px;">{{ $submitPayslip->income_id }}</div>
                                <div class="emp-payslip-cell" style="width: 15%;
                                min-width: 150px;">{{ $submitPayslip->datefrom }}</div>
                                <div class="emp-payslip-cell" style="width: 15%;
                                min-width: 150px;">{{ $submitPayslip->dateto }}</div>
                                <div class="emp-payslip-cell" style="width: 15%;
                                min-width: 150px;">{{ $submitPayslip->hourlyRate }}</div>
                                <div class="emp-payslip-cell" style="width: 20%;
                                min-width: 200px;">{{ $submitPayslip->hoursRendered }}</div>
                                <div class="emp-payslip-cell" style="width: 15%;
                                min-width: 150px;">{{ $submitPayslip->workDays }}</div>
                                <div class="emp-payslip-cell" style="width: 10%;
                                min-width: 100px;"><button type="submit" style="width: 100%;
                                background-color: transparent;
                                border: none;
                                color: blue;
                                text-align: center;
                                padding: 2px;">View Details</button></div>
                            </form>
                        @endforeach
                    </div>

                </div>

                <div class="table-footer">

                </div>

            </div>
        </div>



    </div>

    <script src="/javascript/jquery-3.7.1.min.js"></script>
    <script src="/javascript/topbar-menu-toggle.js"></script>
</body>

</html>
