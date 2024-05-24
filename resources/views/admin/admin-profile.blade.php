<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd?v=<?php echo time(); ?>"
        crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <div class="employee-profile-container">

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
                    <span class="title">My Profile</span>
                    <span class="greetings">Hello, {{ $user->username }}! Welcome Back!</span>
                </div>
                <div class="profile">
                    <a href="{{ route('admin-profile') }}" class="name">{{ Auth::user()->username }}</a>

                </div>
                <div class="menu">
                    <div class="menu-flex">
                        <div class="info">
                            <a href="" class="view-person">
                                <span>
                                    <span class="">{{ $user->user_name }}</span>
                                </span>
                            </a>
                        </div>
                        <a class="menu-item act">
                            <i href="{{ route('dashboard') }}" class="bi bi-boxes"></i>
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

        <div class="admin-profile">
            <div class="background"></div>
            <div class="profile-account">
                <div class="profile-pic">
                    <img src="/assets/imgs/pfp.jpg">
                </div>
                <div class="username">
                    <span><p>{{ $user->firstname }} <p>{{ $user->lastname }}</p></p></span>
                    <span><p>{{ $user->email }}</p></span>
                </div>
            </div>
            <form action="" method="POST" class="about-me-wrapper">
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
                                    <span>Name</span>
                                </div>
                                <div class="flex">
                                    <input type="text" value="{{ $user->firstname }} {{ $user->lastname }}">
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Email</span>
                                </div>
                                <div class="flex">
                                    <input type="email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Username</span>
                                </div>
                                <div class="flex">
                                    <input type="text" value="{{ $user->username }}">
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
                                    <span>{{ $user->userID }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Department</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $user->department_name }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Position</span>
                                </div>
                                <div class="flex">
                                    <span>{{ $user->position_name }}</span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Status</span>
                                </div>
                                <div class="flex">
                                    <span>
                                        @if ($user->is_active == 1)
                                        Active
                                        @elseif ($user->is_active == 2)
                                        Inactive
                                        @endif
                                    </span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Work Shift</span>
                                </div>
                                <div class="flex">
                                    <span>
                                        @if ($user->workshift_id == 1)
                                        Day Shift (7am-3pm)
                                        @elseif ($user->workshift_id == 2)
                                        Swing Shift (3pm-11pm)
                                        @elseif ($user->workshift_id == 3)
                                        Graveyard Shift (11pm-7am)
                                        @endif
                                    </span>
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>User Type</span>
                                </div>
                                <div class="flex">
                                    <span>
                                        @if ($user->type == 1)
                                        Admin
                                        @elseif ($user->type == 2)
                                        Employee
                                        @endif
                                    </span>
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
                                    @if ($user->gender == 1)
                                    <input type="text" name="" id="" value="Male">
                                    @elseif ($user->gender == 2)
                                    <input type="text" name="" id="" value="Female">
                                    @endif
                                    
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Birthdate</span>
                                </div>
                                <div class="flex">
                                    <input type="text" name="" id="" value="{{ $user->birthdate }}">
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Address</span>
                                </div>
                                <div class="flex">
                                    <input type="text" name="" id="" value="{{ $user->address }}">
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Status</span>
                                </div>
                                <div class="flex">
                                    <input type="text" name="" id="" value="{{ $user->status }}">
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Nationality</span>
                                </div>
                                <div class="flex">
                                    <input type="text" name="" id="" value="{{ $user->nationality }}">
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
                                    <input type="text" name="" id="" value="{{ $user->email }}"> 
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Phone Number</span>
                                </div>
                                <div class="flex">
                                    <input type="text" name="" id="" value="{{ $user->contact }}">
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Telephone Number</span>
                                </div>
                                <div class="flex">
                                    <input type="text" name="" id="">
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="/javascript/jquery-3.7.1.min.js"></script>
        <script src="/javascript/topbar-menu-toggle.js"></script>


</body>

</html>
