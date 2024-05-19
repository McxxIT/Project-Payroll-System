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
                    <a href="employee.php"><img src="/assets/imgs/brand.png" alt="MPS"></a>
                </div>

                <div class="sider-menu">
                    <a class="menu-background" href="{{ route('dashboard') }}"><i
                            class="bi bi-boxes"></i><span>Dashboard</span></a>
                    <a class="menu-background active"><i class="bi bi-person-rolodex"></i><span>Employees</span></a>
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
                    <span class="title">Attendance</span>
                    <span class="greetings">Attendance Monitoring</span>
                </div>
                <div class="profile">
                    <a href="../admin/admin-profile.php" class="name">Robert</a>
                    <a href="../admin/admin-profile.php"><img class="profile-link" src="/assets/imgs/pfp.jpg"></a>
                    <a href="./html/loginPage.php">Logout</a>
                </div>


            </div>
        </div>



        <!-- MAIN CONTENT DATA -->

        <div class="content-wrapper">

            <div class="content-body-wrapper">

                <div class="body-content-header">
                    <a href="{{ route('employee') }}" class="pad-right">Employees</a>
                    <a href="#" class="active-line">Attendance</a>
                </div>

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

                    </div>

                </div>

                <div class="body-content">

                    <div class="body-content-flex">

                        <div class="body-content-header-flex">
                            <div class="search-sort">
                                <div class="search">
                                    <i class="bi bi-search"></i>
                                    <input id="searchInput" class="search-input" type="search" placeholder="Search">
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
                                            <form action="{{ route('view-attendance', ['id' => $employee->userID]) }}" method="post" class="table-cell">
                                                @csrf
                                                <button type="submit" class="btn">
                                                    <span><i class="bi bi-pencil-square"></i> View Details</span>
                                                </button>
                                            </form>                                            
                                        </div>
                                    @endforeach

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

    <script src="../javascript/search-script-employee-admin.js"></script>


</body>

</html>
