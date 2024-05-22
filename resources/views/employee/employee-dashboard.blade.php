<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
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
                    <a class="menu-background active">
                        <i class="bi bi-boxes"></i>
                        <span>Dashboard</span></a>
                    <a class="menu-background" href="{{ route('employee.payslip') }}">
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
                        <a class="menu-item act">
                            <i class="bi bi-boxes"></i>
                            <span>Dashboard</span></a>
                        </a>
                        <a href="{{ route('employee.payslip') }}" class="menu-item">
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
        <div class="e-main-content">
            <div class="e-main-content-flex">
                <div class="item">
                    <div class="header">
                        <span>Upcoming Pay Date</span>
                    </div>
                    <div class="body">
                        <span>02/01/2024</span>
                    </div>
                    <div class="footer"></div>
                </div>
                <div class="item">
                    <div class="sub">
                        <span>Current Payroll Summary</span>
                    </div>
                    <div class="sub">
                        <div class="grand-ch">
                            <span class="first">34,000</span>
                            <span class="second">Earnings</span>
                        </div>
                        <div class="grand-ch">
                            <span class="first">5,000</span>
                            <span class="second">Deduction</span>

                        </div>
                        <div class="grand-ch">

                            <span class="first">29,000</span>
                            <span class="second">Net Pay</span>
                        </div>
                    </div>

                </div>
            </div>




        </div>
    </div>
    <script src="/javascript/jquery-3.7.1.min.js"></script>
    <script src="/javascript/topbar-menu-toggle.js"></script>
</body>

</html>
