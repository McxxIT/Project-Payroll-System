<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
</head>

<body onload="autoClick();">

    <div class="employee_c">

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
                    <a href="{{ route('admin-profile') }}" class="name">Robert</a>

                </div>
                <div class="menu">
                    <div class="menu-flex">
                        <div class="info">
                            <a href="" class="view-person">
                                <span>
                                    <span class="">Robert</span>
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

        {{-- ===================MAIN CONTENT===================== --}}

        <div class="content-wrapper">
            <form id="payslip-body">
                <div class="payslip-header">
                    <div class="p-h-flex">
                        <div class="payslip-header-left">
                            <div class="p-h-content">
                                <span>ID:</span>
                                <span>Name:</span>
                                <span>Position:</span>
                                <span>Email:</span>
                                <span>Phone no.:</span>
                                <span>Address:</span>
                            </div>
                            <div class="p-h-content">
                                <span>{{ $employee->userID }}</span>
                                <span>{{ $employee->firstname }}{{ $employee->lastname }}</span>
                                <span>{{ $employee->position_name }}</span>
                                <span>{{ $employee->email }}</span>
                                <span>{{ $employee->contact }}</span>
                                <span>{{ $employee->address }}</span>
                            </div>
                        </div>
                        <div class="payslip-header-right">
                            <div class="brand">
                                <a href="dashboard.php"><img src="/assets/imgs/brand.png" alt="MPS"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="payslip-content">
                    <div class="p-c-date">
                        <div class="p-c-header">
                            <div class="p-c">
                                <span>Date:</span>
                            </div>
                        </div>
                        <div class="p-c-body">
                            <div class="p-c">
                                <span>Period From:</span>
                                <span>12/01/2024</span>
                            </div>
                            <div class="p-c">
                                <span>Period To:</span>
                                <span>12/31/2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-c-flex">
                        <div class="payslip-content-left">

                            <div class="p-c-income">
                                <div class="p-c-header">
                                    <span>INCOME:</span>
                                </div>
                                <div class="p-c-total">
                                    <div class="p-c">
                                        <span>Hourly Rate:</span>
                                        <span>Hours Rendered:</span>
                                        <span>Worked Days:</span>
                                    </div>
                                    <div class="p-c">
                                        <span>86.76</span>
                                        <span>8.5</span>
                                        <span>24</span>
                                    </div>
                                </div>
                                <div class="p-c-footer">
                                    <span>Total:</span>
                                    <span>17,699.04</span>
                                </div>

                            </div>


                            <div class="p-c-deduction">
                                <div class="p-c-header">
                                    <span>Deductions:</span>
                                </div>
                                <div class="p-c-total">
                                    <div class="p-c">
                                        <span>PhilHealth:</span>
                                        <span>Pag-Ibig:</span>
                                        <span>SSS:</span>
                                        <span>Withholding Tax:</span>
                                        <span>late/s:</span>
                                        <span>Absent/s:</span>
                                    </div>
                                    <div class="p-c">
                                        <span>1,234.00</span>
                                        <span>1,234.00</span>
                                        <span>1,234.00</span>
                                        <span>1,234.00</span>
                                        <span>123.00</span>
                                        <span>737.46</span>
                                    </div>
                                </div>
                                <div class="p-c-footer">
                                    <span>Total:</span>
                                    <span>5,796.46</span>
                                </div>

                            </div>
                        </div>

                        <div class="payslip-content-right">
                            <div class="p-c-gross">
                                <div class="p-c-header-gross">
                                    <span>O.T Hours /Days:</span>
                                </div>
                                <div class="p-c-total-gross">
                                    <div class="p-c">
                                        <span>Regular O.T:</span>
                                        <span>Allowances:</span>
                                        <span>Sunday O.T:</span>
                                        <span>Incentives:</span>
                                        <span>Holiday O.T:</span>
                                        <span>Bonuses:</span>
                                    </div>
                                    <div class="p-c">
                                        <span>343.54</span>
                                        <span>999.99</span>
                                        <span>532.12</span>
                                        <span>1,000.00</span>
                                        <span>737.46</span>
                                        <span>1,000.00</span>
                                    </div>
                                </div>
                                <div class="p-c-footer">
                                    <span>Gross:</span>
                                    <span>4,613.11</span>
                                </div>

                            </div>

                            <div class="p-c-controller">
                                <div class="p-c-c-flex">
                                    <div class="p-c">
                                        <span>Ref. no.:</span>
                                        <span>123456</span>
                                    </div>
                                    <div class="p-c">
                                        <span>Net Income:</span>
                                        <span>16,515.69</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="btn-to-export">
                <a id="download">Export</a>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var element = $("#payslip-body");
    
            $("#download").on('click', function() {
                html2canvas(element, {
                    onrendered: function(canvas) {
                        var imageData = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
                        var link = document.createElement('a');
                        link.download = "image.jpg";
                        link.href = imageData;
                        link.click();
                    }
                });
            });
    
            // Optional: Automatically trigger the download when the page loads
            // $("#download").click();
        });
    </script>

</body>

</html>