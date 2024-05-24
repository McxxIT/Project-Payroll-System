<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <div class="payroll-report-container">

        <!-- SIDEBAR PART -->

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
                    <a class="menu-background " href="{{ route('applicant') }}">
                        <i class="bi bi-person-rolodex"></i>
                        <span>Applicant</span></a>
                    <a class="menu-background " href="{{ route('archive') }}">
                        <i class="bi bi-archive"></i>
                        <span>Archive</span></a>
                    <a class="menu-background " href="{{ route('payroll') }}">
                        <i class="bi bi-credit-card-2-front"></i>
                        <span>Payroll</span></a>
                    <a class="menu-background active" href="#">
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
                    <span class="title">Payroll Report</span>
                    <span class="greetings">&nbsp;</span>
                </div>
                <div class="profile">
                    <a href="{{ route('admin-profile') }}" class="name">{{ $user_name }}</a>

                </div>
                <div class="menu">
                    <div class="menu-flex">
                        <div class="info">
                            <a href="" class="view-person">
                                <span>
                                    <span class="">{{ $user_name }}</span>
                                </span>
                            </a>
                        </div>
                        <a href="{{ route('dashboard') }}" class="menu-item">
                            <i class="bi bi-boxes"></i>
                            <span>Dashboard</span></a>
                        </a>
                        <a href="{{ route('employee') }}" class="menu-item">
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
                        <a href="{{ route('payroll') }}" class="menu-item ">
                            <i class="bi bi-credit-card-2-front"></i>
                            <span>Payroll</span></a>
                        </a>
                        <a href="{{ route('payroll-report') }}" class="menu-item act">
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

        <!-- ================MAIN CONTENT DATA=========== -->

        <div class="content-wrapper">
            {{-- <div class="overview-report">
                <div class="overview-report-flex">
                    <div class="header">NET PAY</div>
                    <div class="body">₱600,000</div>
                </div>
                <div class="overview-report-flex">
                    <div class="body-flex">
                        <div class="department-flex">
                            <div class="flex">
                                <i class="bi bi-circle-fill color1"></i>
                                <div class="body-flex-item">
                                    <div class="header">Front Desk</div>
                                    <div class="body ">₱100,000</div>
                                </div>
                            </div>
                            <div class="flex">
                                <i class="bi bi-circle-fill color2"></i>
                                <div class="body-flex-item">
                                    <div class="header">Housekeeping</div>
                                    <div class="body ">₱100,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="body-content">


                <div class="body-content-header-flex">
                    <div class="search-sort">
                        <div class="search">
                            <i class="bi bi-search"></i>
                            <input class="search-input" type="search" placeholder="Search">
                        </div>
                    </div>

                </div>

                <div class="payroll-report">
                    <div class="body">
                        <div class="header-col">
                            <span>Employee Count</span>
                            <span>Department</span>
                            <span>Net Pay</span>
                        </div>
                        <div class="content-col">
                            @foreach ($departments as $department)
                                <div class="body-row" data-toggle="dropdown">
                                    <span>{{ $department->users_count }}</span>
                                    <span>{{ $department->department_name }}</span>
                                    <span>{{ $totalPaysByDepartment[$department->department_id] }}</span>
                                    <i class="bi bi-chevron-down"></i>
                                </div>

                                <div class="dropdown-row">

                                    @foreach ($department->users as $user)
                                        <div class="dropdown-row-flex">
                                            <span>{{ $user->userID }}</span>
                                            <span>{{ $user->firstname }} {{ $user->lastname }}</span>
                                            <span>{{ $totalPaysByUser[$user->userID] }}</span>
                                            <i class="bi bi-chevron-down" style="color: transparent"></i>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach


                            {{-- <div class="body-row" data-toggle="dropdown">
                                <span>Housekeeping</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <span>Donald</span>
                                <span>123</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                            </div>
                            <div class="body-row" data-toggle="dropdown">
                                <span>Security</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <span>Donald</span>
                                <span>123</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                            </div>
                            <div class="body-row" data-toggle="dropdown">
                                <span>Human Resources</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <span>Donald</span>
                                <span>123</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                            </div>
                            <div class="body-row" data-toggle="dropdown">
                                <span>Sales and Marketing</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <span>Donald</span>
                                <span>123</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                            </div>
                            <div class="body-row" data-toggle="dropdown">
                                <span>Technical</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <span>Donald</span>
                                <span>123</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                            </div> --}}

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="/javascript/jquery-3.7.1.min.js"></script>
    <script src="/javascript/topbar-menu-toggle.js"></script>
    <script src="../javascript/more-table.js"></script>

</body>

</html>
