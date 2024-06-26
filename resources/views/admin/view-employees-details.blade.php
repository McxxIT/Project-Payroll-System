<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd?v=<?php echo time(); ?>"
        crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <div class="employee-details-container">

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
                    <a class="menu-background active" href="{{ route('employee') }}">
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



        <div class="employee-profile">
            <div class="background"></div>
            <div class="profile-account">
                <div class="profile-pic">
                    <img src="/assets/imgs/pfp.jpg">
                </div>
                <div class="username">
                    <span>{{ $employee->firstname }} {{ $employee->lastname }}</span>
                    <span>{{ $employee->email }}</span>
                </div>
            </div>
            <form action="/update-employee/{{ $employee->id }}" method="POST" class="about-me-wrapper">
                @csrf
                @method('PUT')
                <div class="by-col">
                    <div class="by-details">
                        <div class="header">
                            <span>Basic Information</span>
                        </div>
                        <div class="body">
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Full Name</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $employee->firstname }} {{ $employee->lastname }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Email Address</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $employee->email }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>User Name</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $employee->username }}</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="by-details">
                        <div class="header">
                            <span>Job Information</span>
                        </div>
                        <div class="body">
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Employee ID</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $employee->userID }}</span>
                                </div>
                            </div>
                    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Department</span>
                                </div>
                                <div class="flex">
                                    <select name="department_id" id="departmentSelect">
                                        @foreach ($departments as $department)
                                        @if ($employee->department_id == $department->department_id)
                                            <option value="{{ $department->department_id }}" selected>{{ $department->department_name }}</option>
                                        @elseif ($employee->department_id != $department->department_id)
                                            <option value="{{ $department->department_id }}">{{ $department->department_name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Position</span>
                                </div>
                                <div class="flex">
                                    <select name="position_id" id="position" required>
                                        @foreach ($positions as $position)
                                        @if ($employee->position_id == $position->position_id)
                                            <option value="{{ $position->position_id }}" selected>{{ $position->position_name }}</option>
                                        @elseif ($employee->position_id != $position->position_id)
                                            <option value="{{ $position->position_id }}">{{ $position->position_name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Status</span>
                                </div>
                                <div class="flex">
                                    <select name="is_active" id="status" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Work Shift</span>
                                </div>
                                <div class="flex">
                                    <select name="shift_type" id="workShift" required>
                                        <option value="1">Day Shift (7am-3pm)</option>
                                        <option value="2">Swing Shift (3pm-11pm)</option>
                                        <option value="3">Graveyard Shift (11pm-7am)</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>User Type</span>
                                </div>
                                <div class="flex">
                                    <select name="user_type" id="userType" required>
                                        <option value="2">Employee</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>


                <div class="by-col">
                    <div class="by-details">
                        <div class="header">
                            <span>Additional Information</span>
                        </div>
                        <div class="body">
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Gender</span>
                                </div>
                                <div class="flex">
                                    @if ($employee->gender == 1)
                                        <span>Male</span>
                                    @elseif ($employee->gender == 2)
                                        <span>Female</span>
                                    @endif
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Birthdate</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $employee->birthdate }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Address</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $employee->address }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Status</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $employee->status }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Nationality</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $employee->nationality }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="by-details">
                        <div class="header">
                            <span>Contact Information</span>
                        </div>
                        <div class="body">
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Mailing Address</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $employee->email }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Phone Number</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $employee->contact }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Telephone Number</span>
                                </div>
                                <div class="flex">
                                    <span>set telephone no.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer"
                        style="display: flex;
                    justify-content: flex-end;
                    gap: 10px;
                    padding-right: 20px">
                        <a href="{{ route('employee') }}" style="text-decoration: none;">
                            <button
                                style="background-color: green; width: 90px;
                        height: 30px;
                        border: none;
                        color: white;
                        border-radius: 3px;"
                                type="button">Back</button>
                        </a>
                        <button
                            style="background-color: blue; width: 90px;
                        height: 30px;
                        border: none;
                        color: white;
                        border-radius: 3px;"
                            type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="/javascript/jquery-3.7.1.min.js"></script>
    <script src="/javascript/topbar-menu-toggle.js"></script>

</body>

</html>
