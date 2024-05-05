<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payslip</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">

</head>

<body>

    <div class="payslip-container">

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
                    <a class="menu-background active"><i class="bi bi-wallet"></i><span>Payslip</span></a>
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
                    <span class="greetings">Employees Payslip</span>
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
        <!-- ================MAIN CONTENT DATA=========== -->
        <div class="content-wrapper">

            <div class="content-body-wrapper">


                <div class="body-content">

                    <div class="body-content-flex">

                        <div class="body-content-header-flex">
                            <div class="search-sort">
                                <div class="search">
                                    <i class="bi bi-search"></i>
                                    <input id="searchInput" class="search-input" type="search" placeholder="Search">
                                </div>
                                <i class="bi bi-filter text"></i>
                            </div>

                        </div>


                        <div class="data-2">
                            <div class="table-2">
                                <div class="table-header-2">
                                    <div class="table-row-2">
                                        <div class="payslip-cell">ID</div>
                                        <div class="payslip-cell">Department</div>
                                        <div class="payslip-cell">Position</div>
                                        <div class="payslip-cell">Name</div>
                                        <div class="payslip-cell">Email</div>
                                        <div class="payslip-cell"></div>
                                    </div>
                                </div>

                                <div class="table-body-2">

                                    <div id="notFoundMessage" class="not-found-message">
                                        NOT FOUND
                                    </div>

                                    <div class="table-row-2">
                                        <div class="payslip-cell">1</div>
                                        <div class="payslip-cell">Donald Macasampon</div>
                                        <div class="payslip-cell">Manager</div>
                                        <div class="payslip-cell">IT</div>
                                        <div class="payslip-cell green">Active</div>
                                        <div class="payslip-cell">
                                            <a href="#"><span>
                                                    <i class="bi bi-pencil-square"></i>View Details
                                                </span></a>
                                        </div>
                                    </div>
                                    <div class="table-row-2">
                                        <div class="payslip-cell">2</div>
                                        <div class="payslip-cell">tom</div>
                                        <div class="payslip-cell">tr</div>
                                        <div class="payslip-cell">te</div>
                                        <div class="payslip-cell green">Active</div>
                                        <div class="payslip-cell blue">
                                            <span><i class="bi bi-pencil-square"></i>View Details</span>
                                        </div>
                                    </div>
                                    <div class="table-row-2">
                                        <div class="payslip-cell">3</div>
                                        <div class="payslip-cell">jav</div>
                                        <div class="payslip-cell">hr</div>
                                        <div class="payslip-cell">et</div>
                                        <div class="payslip-cell red">Inactive</div>
                                        <div class="payslip-cell blue">
                                            <span><i class="bi bi-pencil-square"></i>View Details</span>
                                        </div>
                                    </div>

                                </div>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../javascript/search-script-payslip-admin.js"></script>
</body>

</html>
