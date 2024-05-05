<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
</head>

<body>

    <div class="employee_c">

        <div class="sidebar-wrapper">
            <div class="sidebar-flex">

                <div class="brand">
                    <a href="dashboard.php"><img src="/assets/imgs/brand.png" alt="MPS"></a>
                </div>

                <div class="sider-menu">
                    <a class="menu-background" href="{{ route('employee-dashboard') }}"><i
                            class="bi bi-boxes"></i><span>Dashboard</span></a>
                    <a class="menu-background" href="{{ route('employee-payslip') }}"><i
                            class="bi bi-person-rolodex"></i><span>Payslip</span></a>
                    <a class="menu-background" href="{{ route('employee-timekeeping') }}"><i
                            class="bi bi-alarm"></i><span>Timekeeping</span></a>
                </div>
            </div>
        </div>

        <!-- =====================TOP BAR================ -->

        <div class="topbar-wrapper">
            <div class="profile-wrapper">

                <div class="c-header-flex">
                    <span class="title">Details</span>
                    <span class="greetings">Payslip Details</span>
                </div>
                <div class="profile">
                    <a href="#" class="name">Robert</a>
                    <a href="#"><img class="profile-link" src="/assets/imgs/pfp.jpg"></a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="out-flex-wrapper" onclick="event.preventDefault(); this.closest('form').submit();">
                            <span class="text-logout">Logout</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- ===================MAIN CONTENT===================== --}}


        <div class="content-wrapper">
            <div class="payslip-body"id="contentToExport">
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
                                <span>123</span>
                                <span>Robert Falle</span>
                                <span>HR</span>
                                <span>RobertJhonDoe@example.com</span>
                                <span>0987654321</span>
                                <span>Davao, Central, Manila City</span>
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
            </div>
            <div class="btn-to-export">
                <button id="exportButton">Export</button>
            </div>
        </div>

    </div>


    <!-- Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>

    <!-- Script for PDF conversion -->
    <script>
        document.getElementById('exportButton').addEventListener('click', function () {
            // Convert HTML to image
            domtoimage.toPng(document.getElementById('contentToExport'))
                .then(function (dataUrl) {
                    // Create PDF
                    var pdf = new jsPDF('p', 'pt', 'a4');
                    var width = pdf.internal.pageSize.getWidth();
                    var height = pdf.internal.pageSize.getHeight();
                    pdf.addImage(dataUrl, 'PNG', 0, 0, width, height);
                    pdf.save('payslip.pdf');
                })
                .catch(function (error) {
                    console.error('Error converting HTML to image:', error);
                });
        });
    </script>

</body>

</html>
