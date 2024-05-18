<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                    <a class="menu-background active"><i class="bi bi-boxes"></i><span>Dashboard</span></a>
                    <a class="menu-background" href="{{ route ('employee.payslip') }}"><i class="bi bi-person-rolodex"></i><span>Payslip</span></a>
                    <a class="menu-background" href="{{ route ('employee-timekeeping') }}"><i class="bi bi-alarm"></i><span>Timekeeping</span></a>
                </div>
            </div>
        </div>

        <!-- =====================TOP BAR================ -->

        <div class="topbar-wrapper">
            <div class="profile-wrapper">

                <div class="c-header-flex">
                    <span class="title">Dashboard</span>
                    <span class="greetings">Hello, Robert! Welcome Back!</span>
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

        <div class="e-main-content">

            <div class="e-main-content-wrapper">

                <div class="main-content-1">
                    <div class="title-welcome">Welcome, Robert Falle!</div>
                    <div class="card-1">
                        <div class="body-card-left">
                            <span class="title">Current Payroll Summary</span>
                            <div>
                                <div class="body-card-flex">
                                    <div class="box">
                                        <span class="value-number green">34,000</span>
                                        <span class="value-title">Earnings</span>
                                    </div>
                                    <div class="box">
                                        <span class="value-number red">5,000</span>
                                        <span class="value-title">Deduction</span>
                                    </div>
                                    <div class="box">
                                        <span class="value-number blue">29,000</span>
                                        <span class="value-title">Net Pay</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="body-card-right">
                            <span class="title">Upcoming Pay Dates</span>
                            <div class="box">
                                <span class="value-number blue">02/01/2024</span>
                                <span class="value-title">mm/dd/yy</span>
                            </div>
                        </div>

                    </div>
                    <div class="card-2">
                        <div class="body-card-left">

                            <div class="item-1">
                                <span class="title-heading">Time Off Balance/Month</span>
                                <div class="box-1-flex">
                                    <div class="box">
                                        <span class="value orange">5</span>
                                        <span class="title">Vacation Days</span>
                                    </div>
                                    <div class="box">
                                        <span class="value yellow">5</span>
                                        <span class="title">Sick Leave</span>
                                    </div>
                                    <div class="box">
                                        <span class="value red-orange">5</span>
                                        <span class="title">Others</span>
                                    </div>
                                    <div class="box">
                                        <span class="value green">2</span>
                                        <span class="title">Absent</span>
                                    </div>
                                    <div class="box">
                                        <span class="value red">6</span>
                                        <span class="title">Late</span>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="body-card-right">
                            <div class="body-card-flex">
                                <div class="box">
                                    <span class="value red">2</span>
                                    <span class="title">Leave Balance</span>
                                </div>
                                <div class="box">
                                    <span class="value red">39</span>
                                    <span class="title">Yearly Total Leave</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-content-2">

                </div>
            </div>



        </div>
    </div>

</body>

</html>
