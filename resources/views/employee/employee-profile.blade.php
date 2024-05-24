<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd?v=<?php echo time(); ?>"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">

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
                    <a class="menu-background" href="{{ route('employee-dashboard') }}">
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
                    <span class="title">My Profile</span>
                    {{-- <span class="greetings">Hello, Robert! Welcome Back!</span> --}}
                </div>
                <div class="profile">
                    <a href="{{ route('employee-profile') }}" class="name">{{ $user->username }}</a>

                </div>
                <div class="menu">
                    <div class="menu-flex">
                        <div class="info">
                            <a href="{{ route('employee-profile') }}" class="view-person">
                                <span>
                                    <span class="">{{ $user->username }}</span>
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

        <!-- MAIN CONTENT DATA -->

        <div class="employee-profile">
            
            <div class="background"></div>
            <div class="profile-account">
                <div class="profile-pic">
                    <img src="/assets/imgs/pfp.jpg">
                </div>
                <div class="username">
                    <span>{{ $user->firstname }} {{ $user->lastname }}</span>
                    <span>{{ $user->email }}</span>
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
                                    <span>Full Name</span>
                                </div>
                                <div class="flex">
                                    <input type="text" value="{{ $user->firstname }} {{ $user->lastname }}">
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>Email Address</span>
                                </div>
                                <div class="flex">
                                    <input type="email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="inside-body">
                                <div class="flex">
                                    <span>User Name</span>
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
                                    <span>{{ $user->is_active }}</span>
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

        <script src="/javascript/jquery-3.7.1.min.js"></script>
        <script src="/javascript/topbar-menu-toggle.js"></script>

</body>

</html>