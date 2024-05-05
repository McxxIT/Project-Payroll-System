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
                    <a href="employee.php"><img src="/assets/imgs/brand.png" alt="MPS"></a>
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
                    <span class="greetings">My Profile</span>
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

        <div class="admin-profile">

            <div class="background"></div>
            <div class="profile-account">
                <div class="profile-pic">
                    <img src="/assets/imgs/robert.jpg">
                </div>
                <div class="username">
                    <span>Robert Jhon Falle</span>
                    <span>Robertjhonjhon@gmail.com</span>
                </div>
            </div>
            <div class="about-me-wrapper">

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
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Email Address</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>User Name</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Password</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
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
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Phone Number</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Telephone Number</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
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
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Job Title</span>
                                </div>
                                <div class="flex">
                                    <span>Admin</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Department</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Status</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Nationality</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
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
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Birthdate</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Address</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Status</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
    
                            <div class="inside-body">
                                <div class="flex">
                                    <span>Nationality</span>
                                </div>
                                <div class="flex">
                                    <span>Robert Jhon Falle</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                {{-- <div class="about-me">
                    <span>About Me</span>
                </div>

                <div class="about-me-details-flex">
                    <div class="about-me-details">
                        <div class="about-me-header">
                            <span>Personal Information:</span>
                            <button><i class="bi bi-pencil-square"></i>Edit</button>
                        </div>

                        <div class="content-details-wrapper">
                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>Last Name: </span>
                                </div>
                                <div class="c-body-details">
                                    <span>Falle </span>
                                </div>
                            </div>
                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>First Name: </span>
                                </div>
                                <div class="c-body-details">
                                    <span>Robert </span>
                                </div>
                            </div>
                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>Status: </span>
                                </div>
                                <div class="c-body-details">
                                    <span>Single </span>
                                </div>
                            </div>
                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>Nationality: </span>
                                </div>
                                <div class="c-body-details">
                                    <span>Jhon Doe </span>
                                </div>
                            </div>
                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>Birthdate: </span>
                                </div>
                                <div class="c-body-details">
                                    <span>03/31/1777 </span>
                                </div>
                            </div>
                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>Gender: </span>
                                </div>
                                <div class="c-body-details">
                                    <span>Female</span>
                                </div>
                            </div>
                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>Address: </span>
                                </div>
                                <div class="c-body-details">
                                    <span>Davao City</span>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="about-me-details">
                        <div class="about-me-header">
                            <span>Employee Details:</span>
                        </div>

                        <div class="content-details-wrapper">

                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>ID:</span>
                                </div>
                                <div class="c-body-details">
                                    <span>12345 </span>
                                </div>
                            </div>
                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>Department: </span>
                                </div>
                                <div class="c-body-details">
                                    <span>Front Office Department</span>
                                </div>
                            </div>
                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>Position:</span>
                                </div>
                                <div class="c-body-details">
                                    <span>Front Desk Clerk</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="about-me-details">
                        <div class="about-me-header">
                            <span>Privacy & Security:</span>
                        </div>

                        <div class="content-details-wrapper">

                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>Email:</span>
                                </div>
                                <div class="c-body-details">
                                    <span>JhondoeRobert@gmail.com </span>
                                </div>
                            </div>
                            <div class="c-details">
                                <div class="c-header-details">
                                    <span>Password: </span>
                                </div>
                                <div class="c-body-details">
                                    <span>***************** </span>
                                </div>
                            </div>
                        </div>

                    </div>


                </div> --}}
            </div>



        </div>

</body>

</html>
