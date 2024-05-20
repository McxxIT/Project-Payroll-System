<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <div class="applicant-container">

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
                    <a class="menu-background " href="{{ route('applicant') }}">
                        <i class="bi bi-person-rolodex"></i>
                        <span>Applicant</span></a>
                    <a class="menu-background active" href="#">
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
                    <span class="title">Applicant</span>
                    <span class="greetings">Archived Applicants</span>
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
                        <a href="{{ route('employee') }}" class="menu-item">
                            <i class="bi bi-person-rolodex"></i>
                            <span>Employees</span></a>
                        </a>
                        <a href="{{ route('applicant') }}" class="menu-item ">
                            <i class="bi bi-person-rolodex"></i>
                            <span>Applicant</span></a>
                        </a>
                        <a href="{{ route('archive') }}" class="menu-item act">
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


        <!-- ================MAIN CONTENT DATA=========== -->

        <div class="content-wrapper">
            <div class="content-body-wrapper">
                <div class="body-content">
                    <div class="body-content-header-flex">
                        <!-- <div class="body-content-header">
                            <span>Archive</span>

                        </div> -->

                        <div class="search-sort">
                            <div class="search">
                                <i class="bi bi-search"></i>
                                <input id="searchInput" class="search-input" type="search" placeholder="Search">
                            </div>
                        </div>

                    </div>


                    <div class="data-1">
                        <div class="table-1">
                            <div class="table-header-1">
                                <div class="table-row-1">
                                    <div class="applicant-cell">User ID</div>
                                    <div class="applicant-cell">Username</div>
                                    <div class="applicant-cell">Name</div>
                                    <div class="applicant-cell">Email</div>
                                    <div class="applicant-cell">Status</div>
                                    <div class="applicant-cell">Date Hired</div>
                                </div>
                            </div>

                            <div class="table-body-1">

                                <div id="notFoundMessage" class="not-found-message">
                                    NOT FOUND
                                </div>

                                @foreach ($applicants as $applicant)
                                    <div class="table-row-1">
                                        <div class="applicant-cell">{{ $applicant->userID }}</div>
                                        <div class="applicant-cell">{{ $applicant->username }}</div>
                                        <div class="applicant-cell">{{ $applicant->firstname }}
                                            {{ $applicant->lastname }}</div>
                                        <div class="applicant-cell">{{ $applicant->email }}</div>
                                        @if ($applicant->is_accepted == 1)
                                            <div class="applicant-cell blue">Pending</div>
                                        @elseif ($applicant->is_accepted == 2)
                                            <div class="applicant-cell green">Hired</div>
                                        @elseif ($applicant->is_accepted == 3)
                                            <div class="applicant-cell red">Declined</div>
                                        @endif
                                        <div class="applicant-cell">{{ $applicant->created_at->toDateString() }}</div>
                                    </div>
                                @endforeach
                                {{-- <div class="table-row-1">
                                    <div class="applicant-cell">1/31/2023</div>
                                    <div class="applicant-cell">1234</div>
                                    <div class="applicant-cell">dsad</div>
                                    <div class="applicant-cell">asd</div>
                                    <div class="applicant-cell">asda</div>
                                    <div class="applicant-cell green">HIRED</div>
                                </div>
                                <div class="table-row-1">
                                    <div class="applicant-cell">1/31/2023</div>
                                    <div class="applicant-cell">1234</div>
                                    <div class="applicant-cell">dsad</div>
                                    <div class="applicant-cell">asd</div>
                                    <div class="applicant-cell">asda</div>
                                    <div class="applicant-cell red">DECLINED</div>
                                </div> --}}

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
    <script src="/javascript/jquery-3.7.1.min.js"></script>
    <script src="/javascript/topbar-menu-toggle.js"></script>
    <script src="../javascript/search-script-archive-admin.js"></script>
</body>

</html>
