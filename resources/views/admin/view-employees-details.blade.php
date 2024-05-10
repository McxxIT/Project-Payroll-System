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
                    <a class="menu-background" href="{{ route('dashboard') }}"><i
                            class="bi bi-boxes"></i><span>Dashboard</span></a>
                    <a class="menu-background" href="{{ route('employee') }}"><i
                            class="bi bi-person-rolodex"></i><span>Employees</span></a>
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
            <form class="about-me-wrapper">

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

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Password</span>
                                </div>
                                <div class="flex">
                                    <span>set password</span>
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
                                    <span>E{{ $employee->userID }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Department</span>
                                </div>
                                <div class="flex">
                                    <select name="department_id" id="departmentSelect">
                                        <option value="">-</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}" id="department"> {{ $department->department_name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Position</span>
                                </div>
                                <div class="flex">
                                    <select name="position_id" id="position">
                                        <option value="">-</option>
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}" id="position">{{ $position->position_name }}</option>
                                        @endforeach
                                    </select>
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

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Status</span>
                                </div>
                                <div class="flex">
                                    @if ($employee->is_active == 1)
                                        <span>Active</span>
                                    @elseif ($employee->is_active == 0)
                                        <span>Inactive</span>
                                    @endif
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Work Shift</span>
                                </div>
                                <div class="flex">
                                    <select name="user_type" id="type">
                                        <option>Day Shift (7am-3pm)</option>
                                        <option>Swing Shif (3pm-11pm)</option>
                                        <option>Graveyard Shift (11pm-7am)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>User Type</span>
                                </div>
                                <div class="flex">
                                    <select name="user_type" id="type">
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

                    <div class="footer">
                        <a href="{{ route('employee') }}"><button class="green">Back</button></a>
                        <button class="blue" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
