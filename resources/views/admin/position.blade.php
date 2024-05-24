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
                    <a class="menu-background " href="{{ route('payroll-report') }}">
                        <i class="bi bi-file-earmark-post"></i>
                        <span>Payroll Report</span></a>
                    <a class="menu-background " href="{{ route('payslip') }}">
                        <i class="bi bi-wallet"></i>
                        <span>Payslip</span>
                    </a>
                    <a class="menu-background active" href="{{ route('company') }}">
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
                    <span class="title">Company</span>
                    <span class="greetings">Company Management</span>
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
                        <a href="{{ route('payroll-report') }}" class="menu-item">
                            <i class="bi bi-file-earmark-post"></i>
                            <span>Payroll Report</span></a>
                        </a>
                        <a href="{{ route('payslip') }}" class="menu-item ">
                            <i class="bi bi-wallet"></i>
                            <span>Payslip</span>
                        </a>
                        <a href="{{ route('company') }}" class="menu-item act">
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

        <!-- =====================MAIN CONTENT================ -->
        <div class="modal-wrapper">

            <div class="modal-card-1">
                <div class="modal-flex-card">
                    <div class="heading">
                        <span class="">Add Department</span>
                        {{-- <i class="bi bi-x-lg close"></i> --}}
                    </div>
                    <form action="{{ route('positionStore') }}" method="POST" class="body-form">
                        @csrf
                        <div class="body">
                            <div class="body-flex">
                                <label for="" class="title">Department Name:</label>
                                <select name="department_id" id="" class="drop-opt">
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->department_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="body-flex">
                                <label for="" class="title">Add Position Name:</label>
                                <input name="position_name" type="text">
                            </div>

                        </div>
                        <div class="footer">
                            <button class="close">Cancel</button>
                            <button type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="content-wrapper">
            <div class="content-body-wrapper">
                <div class="body-content">
                    <div class="body-content-header">
                        <a href="{{ route('company') }}" class="pad-right">Department</a>
                        <a href="#" class="active-line ">Position</a>
                    </div>
                    <div class="body-header">
                        <div class="search">
                            <i class="bi bi-search"></i>
                            <input class="search-input" type="search" placeholder="Search">
                        </div>
                        <div class="add-btn">
                            <i class="bi bi-plus"></i>
                            <button>Add</button>
                        </div>
                    </div>

                    <div class="data-6">
                        <div class="table-6">
                            <div class="table-header-6">
                                <div class="table-row-6">
                                    <div class="table-cell-6">Department</div>
                                    <div class="table-cell-6">Position ID</div>
                                    <div class="table-cell-6">Position Name</div>
                                    <div class="table-cell-6">Status</div>
                                    <div class="table-cell-6">Action</div>
                                </div>
                            </div>

                            <div class="table-body-6">

                                <div id="notFoundMessage" class="not-found-message">
                                    NOT FOUND
                                </div>

                                @foreach ($departments as $department)
                                    <div class="table-row-6-header" data-toggle="dropdown"
                                        data-department-id="{{ $department->id }}">
                                        <div class="table-cell-6"><i class="bi bi-chevron-down"></i></div>
                                        <div class="table-cell-6">{{ $department->department_name }}</div>
                                    </div>
                                    <div class="position-body-wrapper" id="position-{{ $department->id }}">
                                        @foreach ($positions as $position)
                                            @if ($position->department_id == $department->id)
                                                <div class="dropdown-row">
                                                    <div class="table-row-6 dropdown-row-flex">
                                                        <div class="table-cell-6"></div>
                                                        <div class="table-cell-6">{{ $position->position_id }}</div>
                                                        <div class="table-cell-6">{{ $position->position_name }}</div>
                                                        @if ($position->is_active == 1)
                                                            <div class="table-cell-6 green">Active</div>
                                                        @elseif ($position->is_active == 0)
                                                            <div class="table-cell-6 red">Inactive</div>
                                                        @endif
                                                        <div class="table-cell-6">
                                                            @if ($position->is_active == 1)
                                                            <form action="{{ route('position.deactivate', $position->id) }}" method="POST">
                                                                    @csrf
                                                                    <button type="submit" class="button decline">Deactivate</button>
                                                                </form>
                                                            @elseif ($position->is_active == 0)
                                                                <form action="{{ route('position.activate', $position->id) }}" method="POST">
                                                                    @csrf
                                                                    <button type="submit" class="button accept">Activate</button>
                                                                </form>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach
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
    <script src="../javascript/modal-script.js"></script>
    <script src="../javascript/more-table.js"></script>
</body>

</html>
