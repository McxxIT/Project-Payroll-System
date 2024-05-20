<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <div class="employee-container">

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
                    <a class="menu-background active" href="#">
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



        <!-- MAIN CONTENT DATA -->

        <div class="content-wrapper">

            <div class="content-body-wrapper">

                <div class="cards-container">
                    <div class="flex-1-container">

                        <div class="flex-row-card">
                            <div class="card-wrapper">
                                <span class="number">0</span>
                                <span class="text-pending">LATES</span>
                            </div>
                            <div class="card-wrapper">
                                <span class="number">0</span>
                                <span class="text-overdue">ABSENTS</span>
                            </div>
                        </div>

                        <div class="divider"></div>


                        <div class="flex-row-card">
                            <div class="card-wrapper">
                                <span class="number-green">{{ $activeEmployeesCount }}</span>
                                <span class="text-pending">ACTIVE</span>
                            </div>
                            <div class="card-wrapper">
                                <span class="number-red">{{ $inactiveEmployeesCount }}</span>
                                <span class="text-overdue">INACTIVE</span>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="body-content">

                    <div class="body-content-flex">

                        <div class="body-content-header-flex">
                            <div class="search-sort">
                                <div class="search">
                                    <i class="bi bi-search"></i>
                                    <input id="searchInput" class="search-input" type="search"
                                        placeholder="Search">
                                </div>
                            </div>

                        </div>
                        <div class="data">
                            <div class="table">
                                <div class="table-header">
                                    <div class="table-row">
                                        <div class="table-cell">ID</div>
                                        <div class="table-cell">Name</div>
                                        <div class="table-cell">Position</div>
                                        <div class="table-cell">Department</div>
                                        <div class="table-cell">Status</div>
                                        <div class="table-cell">Action</div>
                                    </div>
                                </div>

                                <div class="table-body">

                                    <div id="notFoundMessage" class="not-found-message">
                                        NOT FOUND
                                    </div>

                                    @foreach ($employees as $employee)
                                        <div class="table-row">
                                            <div class="table-cell">{{ $employee->userID }}</div>
                                            <div class="table-cell">{{ $employee->firstname }}
                                                {{ $employee->lastname }}</div>
                                            <div class="table-cell">{{ $employee->position }}</div>
                                            <div class="table-cell">{{ $employee->department }}</div>

                                            @if ($employee->is_active == 1)
                                                <div class="table-cell green">Active</div>
                                            @elseif ($employee->is_active == 0)
                                                <div class="table-cell red">Inactive</div>
                                            @endif
                                            <form action="/employee-details/{{ $employee->userID }}" method="post"
                                                class="table-cell">
                                                @csrf
                                                <button type="submit" class="btn"><span>
                                                        <i class="bi bi-pencil-square"></i>View Details</span>
                                                </button>
                                            </form>
                                        </div>
                                    @endforeach


                                    {{-- <div class="table-row">
                                        <div class="table-cell">2</div>
                                        <div class="table-cell">tom</div>
                                        <div class="table-cell">tr</div>
                                        <div class="table-cell">te</div>
                                        <div class="table-cell green">Active</div>
                                        <div class="table-cell blue">
                                            <span><i class="bi bi-pencil-square"></i>View Details</span>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-cell">3</div>
                                        <div class="table-cell">jav</div>
                                        <div class="table-cell">hr</div>
                                        <div class="table-cell">et</div>
                                        <div class="table-cell red">Inactive</div>
                                        <div class="table-cell blue">
                                            <span><i class="bi bi-pencil-square"></i>View Details</span>
                                        </div>
                                    </div> --}}

                                </div>

                            </div>

                            <div class="table-footer">

                            </div>

                        </div>

                    </div>



                </div>




            </div>


        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="/javascript/jquery-3.7.1.min.js"></script>
    <script src="/javascript/topbar-menu-toggle.js"></script>
    <script src="../javascript/search-script-employee-admin.js"></script>


</body>

</html>
