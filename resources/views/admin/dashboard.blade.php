<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <div class="dashboard-container">

        <!-- SIDEBAR PART -->

        <div class="sidebar-wrapper">
            <div class="sidebar-flex">

                <div class="brand">
                    <a href="dashboard.php"><img src="/assets/imgs/brand.png" alt="MPS"></a>
                </div>

                <div class="sider-menu">
                    <a class="menu-background active"><i class="bi bi-boxes"></i><span>Dashboard</span></a>
                    <a class="menu-background" href="{{ route('employee') }}"><i class="bi bi-person-rolodex"></i><span>Employees</span></a>
                    <a class="menu-background" href="{{ route('applicant') }}"><i class="bi bi-person-rolodex"></i><span>Applicant</span></a>
                    <a class="menu-background" href="{{ route('archive') }}"><i class="bi bi-archive"></i><span>Archive</span></a>
                    <a class="menu-background" href="{{ route('payroll') }}"><i class="bi bi-credit-card-2-front"></i><span>Payroll</span></a>
                    <a class="menu-background" href="{{ route('payroll-report') }}"><i class="bi bi-file-earmark-post"></i></i><span>Payroll Report</span></a>
                    <a class="menu-background" href="{{ route('payslip') }}"><i  class="bi bi-wallet"></i><span>Payslip</span></a>
                    <a class="menu-background" href="{{ route('company') }}"><i class="bi bi-buildings"></i><span>Company</span></a>
                </div>
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


        <div class="content-wrapper">

            <!-- ================MAIN CONTENT DATA=========== -->
            <div class="content-body">
                <div class="c-body-flex">
                    {{-- <div class="item-1">
                        <div class="item-header">Last Pay Run</div>
                        <div class="item-body">
                            <div class="body-flex">
                                <div class="body-flex-item">
                                    <div class="header">EMPLOYEES NET PAY</div>
                                    <div class="body">₱0.00</div>
                                </div>
                                <div class="body-flex-item">
                                    <div class="header">PAYMENT DATE</div>
                                    <div class="body">02/02/2019</div>
                                </div>
                                <div class="body-flex-item">
                                    @php
                                        $acceptedEmployees = $employees->where('is_accepted', 2)->count();
                                    @endphp
                                    <div class="header">NO. OF EMPLOYEES</div>
                                    <div class="body">{{ $acceptedEmployees }}</div>
                                </div>
                                <div class="body-flex-item">
                                    <div class="body redirect-details">
                                        <a href="{{ route('payroll-report') }}">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="item-2">
                        <div class="item-header">
                        </div>
                        <div class="item-body">
                            <div class="body-flex">
                                <div class="body-flex-item">
                                    <div class="inside-body-item">
                                        <div class="header">
                                            <span>
                                                <i class="bi bi-wallet2"></i>
                                            </span>
                                            <span class="title">PROVIDENT FUND</span>
                                        </div>
                                        <div class="body">
                                            <span class="">₱0.00</span>
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                    <div class="inside-body-item">
                                        <div class="header">
                                            <span>
                                                <i class="bi bi-cash"></i>
                                            </span>
                                            <span class="title">SALARY PER MONTH</span>
                                        </div>
                                        <div class="body">
                                            <span class="">₱115,296</span>
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                    <div class="inside-body-item">
                                        <div class="header">
                                            <span>
                                                <i class="bi bi-person-fill-down"></i>
                                            </span>
                                            <span class="title">PENDING APPLICANTS</span>
                                        </div>
                                        <div class="body">
                                            <span class="">{{ $pendings->count() }}</span>
                                            <a href="{{ route('applicant') }}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="body-flex-item2">
                                    <div class="inside-body-item">
                                        <div class="header">
                                            <span class="t-employees">No. of EMPLOYEES</span>
                                        </div>
                                        <div class="body">
                                            @php
                                                $acceptedEmployees = $employees->where('is_accepted', 2)->count();
                                            @endphp
                                            <span class="n-employees">{{ $acceptedEmployees }}</span>
                                            <a href="{{ route('employee') }}">View Employees</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="latest-employees">
                                <div class="header">
                                    <span class="title">LATEST EMPLOYEES</span>
                                </div>
                                <div class="body">
                                    <div class="header-col">
                                        <span>Date Added</span>
                                        <span>Name</span>
                                        <span>Email</span>
                                        <span>Position</span>
                                        <span>Department</span>
                                    </div>
                                    <div class="content-col">

                                        @php
                                            $displayedEmployees = $employees->sortByDesc('created_at')->take(5);
                                        @endphp 
                                        @foreach ($displayedEmployees as $employee)
                                            <div class="body-row">
                                                <span>{{ $employee->created_at }}</span>
                                                <span>{{ $employee->firstname }} {{ $employee->lastname }}</span>
                                                <span>{{ $employee->email }}</span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.x.x/dist/alpine.min.js" defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sidebarToggle = document.getElementById("sidebarToggle");
            const sidebar = document.querySelector(".sidebar-wrapper");
    
            sidebarToggle.addEventListener("click", () => {
                sidebar.classList.toggle("active");
            });
        });
    </script>

</body>

</html>
