<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time-Keeping</title>
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
                    <a class="menu-background" href="{{ route ('employee-dashboard') }}"><i class="bi bi-boxes"></i><span>Dashboard</span></a>
                    <a class="menu-background" href="{{ route ('employee.payslip') }}"><i class="bi bi-person-rolodex"></i><span>Payslip</span></a>
                    <a class="menu-background active"><i class="bi bi-alarm"></i><span>Timekeeping</span></a>
                </div>
            </div>
        </div>

        <!-- =====================TOP BAR================ -->

        <div class="topbar-wrapper">
            <div class="profile-wrapper">

                <div class="c-header-flex">
                    <span class="title">Time-keeping</span>
                    <span class="greetings">Time-Keeping and Attendance Monitoring</span>
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


        {{-- ===================MAIN CONTENT===================== --}}


        <div class="modal-wrapper">

            <div class="modal-card">
                <div class="modal-flex-card">
                    <div class="heading">
                        <span class="">Request a Leave</span>
                    </div>
                    <form action="{{ route('departmentStore') }}" method="POST" class="body-form">
                        @csrf
                        <div class="body">
                            <label for="" class="title">Leave Reason:</label>
                            <input type="text" name="department_name">
                        </div>
                        <div class="footer">
                            <button class="close">Cancel</button>
                            <button type="submit">Save</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>


        <div class="content-wrapper">

            <div class="content-body-wrapper">

                <div class="cards-container">
                    <div class="flex-1-container">

                        <div class="flex-row-card">
                            <div class="card-wrapper">
                                <span class="number">0</span>
                                <span class="text-pending">LATES</span>
                            </div>
                            <div class="card-wrapper">
                                <span class="number">0</span>
                                <span class="text-overdue">ABSENTS</span>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="body-content">

                    <div class="leave-form">
                        <button class="add">Request a Leave</button>
                    </div>

                    <div class="body-content-flex">

                        <div class="data-4">
                            <div class="table-4">
                                <div class="table-header-4">
                                    <div class="table-row-4">
                                        <div class="tk-cell">Date</div>
                                        <div class="tk-cell">Clock In<i id="sortNameIcon" class="bi bi-sort-alpha-down"></i></div>
                                        <div class="tk-cell">Clock Out</div>
                                        <div class="tk-cell">Hours Rendered<i id="sortStatusIcon" class="bi bi-arrow-down-up"></i></div>
                                        <div class="tk-cell">Lates</div>
                                    </div>
                                </div>

                                <div class="table-body-4">

                                    {{-- <div id="notFoundMessage" class="not-found-message">
                                        NOT FOUND
                                    </div> --}}

                                    <div class="table-row-4">
                                        <div class="tk-cell">02/01/2024</div>
                                        <div class="tk-cell">08:00</div>
                                        <div class="tk-cell">16:30</div>
                                        <div class="tk-cell">8.5</div>
                                        <div class="tk-cell green">0</div>
                                    </div>
                                    <div class="table-row-4">
                                        <div class="tk-cell">02/31/2024</div>
                                        <div class="tk-cell">08:05</div>
                                        <div class="tk-cell">16:30</div>
                                        <div class="tk-cell">8.42</div>
                                        <div class="tk-cell green">0.08</div>
                                    </div>


                                </div>

                            </div>

                            <div class="table-footer">

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
    <script src="../javascript/modal-script.js"></script>

</body>

</html>
