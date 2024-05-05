<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">

</head>

<body>

    <div class="payroll-report-container">

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
                    <a class="menu-background active"><i class="bi bi-file-earmark-post"></i></i><span>Payroll
                            Report</span></a>
                    <a class="menu-background" href="{{ route('payslip') }}"><i
                            class="bi bi-wallet"></i><span>Payslip</span></a>
                            <a class="menu-background" href="{{route('company')}}"><i class="bi bi-buildings"></i><span>Company</span></a>
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

        <!-- ================MAIN CONTENT DATA=========== -->

        <div class="content-wrapper">
            <div class="overview-report">
                <div class="overview-report-flex">
                    <div class="header">NET PAY</div>
                    <div class="body">₱600,000</div>
                </div>
                <div class="overview-report-flex">
                    <div class="body-flex">
                        <div class="department-flex">
                            <div class="flex">
                                <i class="bi bi-circle-fill color1"></i>
                                <div class="body-flex-item">
                                    <div class="header">Front Desk</div>
                                    <div class="body ">₱100,000</div>
                                </div>
                            </div>
                            <div class="flex">
                                <i class="bi bi-circle-fill color2"></i>
                                <div class="body-flex-item">
                                    <div class="header">Housekeeping</div>
                                    <div class="body ">₱100,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="department-flex">
                            <div class="flex">
                                <i class="bi bi-circle-fill color3"></i>
                                <div class="body-flex-item">
                                    <div class="header">Security</div>
                                    <div class="body ">₱100,000</div>
                                </div>
                            </div>
                            <div class="flex">
                                <i class="bi bi-circle-fill color4"></i>
                                <div class="body-flex-item">
                                    <div class="header">Human Resources</div>
                                    <div class="body ">₱100,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="department-flex">
                            <div class="flex">
                                <i class="bi bi-circle-fill color5"></i>
                                <div class="body-flex-item">
                                    <div class="header">Sales and Marketing</div>
                                    <div class="body ">₱100,000</div>
                                </div>
                            </div>
                            <div class="flex">
                                <i class="bi bi-circle-fill color6"></i>
                                <div class="body-flex-item">
                                    <div class="header">Technical</div>
                                    <div class="body ">₱100,000</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>

            </div>

            <div class="body-content">


                <div class="body-content-header-flex">
                    <!-- <div class="body-content-header">
                        <span>Active Employees</span>

                    </div> -->

                    <div class="search-sort">
                        <div class="search">
                            <i class="bi bi-search"></i>
                            <input class="search-input" type="search" placeholder="Search">
                        </div>
                        <i class="bi bi-filter text"></i>
                    </div>

                </div>

                <div class="payroll-report">
                    <div class="body">
                        <div class="header-col">
                            <span>Department</span>
                            <span>Employee Count</span>
                            <span>Total Employer Cost</span>
                            <span>Total Gross Pay</span>
                            <span>Net Pay</span>
                        </div>
                        <div class="content-col">
                            <div class="body-row" data-toggle="dropdown">
                                <span>Front Desk</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <div class="dropdown-row-flex">
                                    <span>Donald</span>
                                    <span>123</span>
                                    <span>₱50,000</span>
                                    <span>₱50,000</span>
                                    <span>₱50,000</span>
                                </div>
                            </div>
                            <div class="body-row" data-toggle="dropdown">
                                <span>Housekeeping</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <span>Donald</span>
                                <span>123</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                            </div>
                            <div class="body-row" data-toggle="dropdown">
                                <span>Security</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <span>Donald</span>
                                <span>123</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                            </div>
                            <div class="body-row" data-toggle="dropdown">
                                <span>Human Resources</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <span>Donald</span>
                                <span>123</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                            </div>
                            <div class="body-row" data-toggle="dropdown">
                                <span>Sales and Marketing</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <span>Donald</span>
                                <span>123</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                            </div>
                            <div class="body-row" data-toggle="dropdown">
                                <span>Technical</span>
                                <span>1</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <span>₱500,000</span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="dropdown-row">
                                <span>Donald</span>
                                <span>123</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                                <span>₱50,000</span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- <script>
        // $(document).ready(function() {
        //     $('.body-row[data-toggle="dropdown"]').click(function() {
        //         var $dropdownRow = $(this).next('.dropdown-row');

        //         if ($dropdownRow.is(':visible')) {
        //             $dropdownRow.slideUp();
        //             $(this).find('i').removeClass('bi-chevron-up').addClass('bi-chevron-down');
        //         } else {
        //             $('.dropdown-row').slideUp(); // Slide up all other dropdowns
        //             $('.body-row i').removeClass('bi-chevron-up').addClass(
        //                 'bi-chevron-down'); // Reset all icons
        //             $dropdownRow.slideDown();
        //             $(this).find('i').removeClass('bi-chevron-down').addClass('bi-chevron-up');
        //         }
        //     });
        // });

        // $(document).ready(function() {
        //     $('.body-row[data-toggle="dropdown"]').click(function() {
        //         var $dropdownRow = $(this).next('.dropdown-row');

        //         if ($dropdownRow.is(':visible')) {
        //             $dropdownRow.slideUp();
        //             $(this).find('i').removeClass('bi-chevron-up').addClass('bi-chevron-down');
        //         } else {
        //             $dropdownRow.slideDown();
        //             $(this).find('i').removeClass('bi-chevron-down').addClass('bi-chevron-up');
        //         }
        //     });
        // });
    </script> --}}

    <script src="../javascript/more-table.js"></script>




</body>

</html>
