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
                    <a href="employee.php"><img src="../asset/imgs/brand.png" alt="MPS"></a>
                </div>

                <div class="sider-menu">
                    <a class="menu-background" href="../employee/employee-dashboard.php"><i class="bi bi-boxes"></i><span>Dashboard</span></a>
                    <a class="menu-background" href="#"><i class="bi bi-person-rolodex"></i><span>Payslip</span></a>
                    <a class="menu-background" href="../payroll.php"><i class="bi bi-credit-card-2-front"></i><span>Timekeeping</span></a>
                </div>

                <div class="profile-wrapper">

                    <div class="attendance wrapper-all">

                        <div class="attendance-wrapper">
                            <div class="clockin-flex hover">

                                <button><i class="bi bi-alarm"></i>Clock In</button>

                            </div>
                            <div class="clockout-flex hover">

                                <button><i class="bi bi-house-door"></i>Clock Out</button>

                            </div>
                        </div>
                        <div class="attendance-break-wrapper">
                            <div class="break-time hover">

                                <button><i class="bi bi-pause"></i>Break Time</button>

                            </div>
                            <div class="end-break-time hover">

                                <button><i class="bi bi-play"></i>End Break</button>

                            </div>
                        </div>

                    </div>
                    <div class="divider"></div>
                    <div class="profile">
                        <img src="../asset/imgs/pfp.jpg">
                        <span>Juan Dela Cruz</span>
                    </div>
                    <div class="profile-menu">
                        <a class="active" href="../employee/employee-profile.php"><i
                                class="bi bi-person"></i><span>Profile</span></a>
                        <a href="../html/loginPage.php"><i class="bi bi-box-arrow-left"></i>
                            <spa>Log out</spa>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- MAIN CONTENT DATA -->

        <div class="employee-profile">
            <div class="profile-header">
                <div class="profile-pic">
                    <img src="../asset/imgs/robert.jpg">
                </div>
                <div class="username">
                    <span><u>Robert Jhon Falle</u></span>
                    <span>Clerk</span>
                </div>

            </div>
            <div class="about-me-wrapper">

                <div class="about-me">
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
                                    <span>Middle Name: </span>
                                </div>
                                <div class="c-body-details">
                                    <span>Jhon Doe </span>
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


                </div>
            </div>



        </div>

</body>

</html>