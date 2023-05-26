@include('layout.header_main')


<div class="container-fluid">
    <div class="row">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                    id="menu">
                    <li class="nav-item">
                        <a class="tab nav-link" onclick="openTab(event, 'Tab1')" id="defaultOpen">
                            <i class="fs-6 bi-grid"></i>
                            <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="tab nav-link" onclick="openTab(event, 'Tab2')">
                            <i class="fs-6 bi-mortarboard"></i>
                            <span class="ms-1 d-none d-sm-inline">Student</span>
                        </a>
                    </li>
                    <li>
                        <a class="tab nav-link" onclick="openTab(event, 'Tab3')">
                            <i class="fs-6 bi-people"></i>
                            <span class="ms-1 d-none d-sm-inline">Teacher</span>
                        </a>
                    </li>
                    <li>
                        <a class="tab nav-link" onclick="openTab(event, 'Tab4')">
                            <i class="fs-6 bi-bell"></i>
                            <span class="ms-1 d-none d-sm-inline">Notice</span>
                        </a>
                    </li>
                    <li>
                        <a class="tab nav-link" onclick="openTab(event, 'Tab5')">
                            <i class="fs-6 bi-bar-chart-line-fill"></i>
                            <span class="ms-1 d-none d-sm-inline">Results</span>
                        </a>
                    </li>
                    <li>
                        <a class="tab nav-link" onclick="openTab(event, 'Tab6')">
                            <i class="fs-6 bi-currency-dollar"></i>
                            <span class="ms-1 d-none d-sm-inline">Deposit</span>
                        </a>
                    </li>
                    <li>
                        <a class="tab nav-link" onclick="openTab(event, 'Tab7')">
                            <i class="fs-6 bi-book"></i>
                            <span class="ms-1 d-none d-sm-inline">Courses</span>
                        </a>
                    </li>
                    <li>
                        <a class="tab nav-link" href="../download/">
                            <i class="fs-6 bi-download"></i>
                            <span class="ms-1 d-none d-sm-inline">Download</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col py-3">

            <div id="Tab1" class="tabcontent">

                {{-- <img src="../images/sipi.png" class="rounded mx-auto d-block" alt="..."> --}}
                <h1 class="text-center fw-bold">Best Polytechnic Institute</h1>
                <h3 class="text-center">Dhaka</h3>

                <strong>
                    <p class="text-center fs-5" id="date"></p>
                </strong>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col-md-3">
                        <div class="card text-center bg-primary bg-opacity-75">
                            <div class="card-body">
                                <h5 class="card-title">Total Student</h5>
                                <p class="card-text fs-3">
                                    3 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-success bg-opacity-75">
                            <div class="card-body">
                                <h5 class="card-title">Total Teacher</h5>
                                <p class="card-text fs-3">
                                    6 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-danger bg-opacity-75">
                            <div class="card-body">
                                <h5 class="card-title">Running Notice</h5>
                                <p class="card-text fs-3">
                                    0 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-warning bg-opacity-75">
                            <div class="card-body">
                                <h5 class="card-title">Today Total Deposit</h5>
                                <p class="card-text fs-3">
                                    0.00৳ </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-warning bg-opacity-75">
                            <div class="card-body">
                                <h5 class="card-title">Today My Deposit</h5>
                                <p class="card-text fs-3">
                                    0.00৳ </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--  -->
            <div id="Tab2" class="tabcontent">

                <div class="container text-center">
                    <h3 class="text-center">Student Section</h3>
                </div>

                <hr>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col-md-3">
                        <div class="card text-center bg-info bg-opacity-75">
                            <a class="text-decoration-none" href="{{ route('student.addPage') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-person-fill-add"></i>
                                    <h5 class="card-title">Add Student</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-primary bg-opacity-50">
                            <a class="text-decoration-none" href="{{ route('student.all') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-people"></i>
                                    <h5 class="card-title">All Student</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-warning bg-opacity-75">
                            <a class="text-decoration-none" href="{{ route('student.trashPage') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-trash3"></i>
                                    <h5 class="card-title">Trashed Student</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-danger bg-opacity-75">
                            <a class="text-decoration-none" href="{{ route('semester.update') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-pencil-square"></i>
                                    <h5 class="card-title">Update Semester</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-md-3">
                        <div class="card text-center bg-info bg-opacity-75">
                            <a class="text-decoration-none" href="../other/administration/attendance_history.php">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-table"></i>
                                    <h5 class="card-title">Attendance History</h5>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                </div>

            </div>

            <!-- Tab End -->

            <!--  -->
            <div id="Tab3" class="tabcontent">

                <div class="container text-center">
                    <h3 class="text-center">Teacher Section</h3>
                </div>

                <hr>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col-md-3">
                        <div class="card text-center bg-warning bg-opacity-75">
                            <a class="text-decoration-none" href="{{ route('teacher.addPage') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-person-fill-add"></i>
                                    <h5 class="card-title">Add Teacher</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-primary bg-opacity-50">
                            <a class="text-decoration-none" href="{{ route('teacher.all') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-people"></i>
                                    <h5 class="card-title">All Teacher</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-info bg-opacity-75">
                            <a class="text-decoration-none" href="{{ route('teacher.trashPage') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-trash"></i>
                                    <h5 class="card-title">Trasehd Teacher</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tab End -->

            <!--  -->
            <div id="Tab4" class="tabcontent">

                <div class="container text-center">
                    <h3 class="text-center">Notice Section</h3>
                </div>

                <hr>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col-md-3">
                        <div class="card text-center bg-primary bg-opacity-50">
                            <a class="text-decoration-none" href="{{ route('notice.addPage') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-plus-circle-fill"></i>
                                    <h5 class="card-title">Add Notice</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-info bg-opacity-75">
                            <a class="text-decoration-none" href="{{ route('notice.all') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-table"></i>
                                    <h5 class="card-title">All Notice</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-warning bg-opacity-75">
                            <a class="text-decoration-none" href="{{ route('notice.archivePage') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-table"></i>
                                    <h5 class="card-title">Archived Notice</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tab End -->

            <!--  -->
            <div id="Tab5" class="tabcontent">

                <div class="container text-center">
                    <h3 class="text-center">Result Section</h3>
                </div>

                <hr>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col-md-3">
                        <div class="card text-center bg-warning bg-opacity-75">
                            <a class="text-decoration-none" href="{{ route('result.publishPage') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-pencil-square"></i>
                                    <h5 class="card-title">Result Publish</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-info bg-opacity-75">
                            <a class="text-decoration-none" href="../other/administration/result_check.php">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-bar-chart-line-fill"></i>
                                    <h5 class="card-title">Results</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tab End -->

            <!--  -->
            <div id="Tab6" class="tabcontent">

                <div class="container text-center">
                    <h3 class="text-center">Fees Deposit Section</h3>
                </div>

                <hr>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col-md-3">
                        <div class="card text-center bg-warning bg-opacity-75">
                            <a class="text-decoration-none" href="../other/administration/fees_depositor_find.php">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-currency-dollar"></i>
                                    <h5 class="card-title">Fees Deposit</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-info bg-opacity-75">
                            <a class="text-decoration-none" href="../other/administration/daily_deposit_query.php">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-currency-dollar"></i>
                                    <h5 class="card-title">Daily Deposit query</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-info bg-opacity-75">
                            <a class="text-decoration-none"
                                href="../other/administration/daily_deposit_query_own.php">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-currency-dollar"></i>
                                    <h5 class="card-title">My Deposit query</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tab End -->



            <!--  -->
            <div id="Tab7" class="tabcontent">

                <div class="container text-center">
                    <h3 class="text-center">Course Section</h3>
                </div>

                <hr>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col-md-3">
                        <div class="card text-center bg-primary bg-opacity-50">
                            <a class="text-decoration-none" href="{{ route('course.addPage') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-plus-circle-fill"></i>
                                    <h5 class="card-title">Add Course</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center bg-info bg-opacity-75">
                            <a class="text-decoration-none" href="{{ route('course.allPage') }}">
                                <div class="card-body text-black">
                                    <i class="fs-4 bi-book"></i>
                                    <h5 class="card-title">Courses List</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tab End -->















            <!--  -->
            {{-- <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
                    <i class="bi bi-arrow-up"></i>
                </button> --}}

        </div>
    </div>
</div>








@include('layout.footer_main')
