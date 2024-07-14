<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Pannel </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/src/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="/src/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/src/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/src/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/src/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/src/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/src/assets/css/img.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/src/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/src/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/src/assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/src/assets/images/favicon.png" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
</head>

<body class="with-welcome-text">
    <div class="container-scroller">

    </div>
    <!-- partial:partials/_navbar.html -->
    @include('AdminView.header-nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section"
                        role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
                        aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                    aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-success todo-list-add-btn"
                                    id="add-task">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-success me-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-success me-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See
                            All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src=#face1.jpg" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src=#face2.jpg" alt="image"><span class="offline"></span>
                            </div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src=#face3.jpg" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src=#face4.jpg" alt="image"><span class="offline"></span>
                            </div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src=#face5.jpg" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="#" alt="image"><span class="online"></span>
                            </div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->


        <!-- partial:partials/_sidebar.html -->
        @include('AdminView.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-tab">
                            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab"
                                            href="#overview" role="tab" aria-controls="overview"
                                            aria-selected="true"><div class="btn btn-primary" >Teacher</div></a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#aud"
                                            role="tab" aria-selected="false"><div class="btn btn-primary" >Student</div> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            href="#demographics" role="tab" aria-selected="false"><div class="btn btn-primary" >More</div></a>
                                    </li>
                                    <li class="nav-item">

                                        {{-- <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab"
                                            href="#addteacher" role="tab" aria-selected="false"><button
                                                class="btn btn-success btn-lg text-white mb-0 me-0" type="button"><i
                                                    class="mdi mdi-account-plus"></i>Add Teacher</button></a> --}}
                                    </li>
                                    <li class="nav-item">

                                        {{-- <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab"
                                            href="#addcourse" role="tab" aria-selected="false"><button
                                                class="btn btn-success btn-lg text-white mb-0 me-0" type="button"><i
                                                    class="mdi mdi-account-plus"></i>Add Course</button></a> --}}
                                    </li>
                                </ul>
                                <div>
                                    <div class="btn-wrapper">
                                        <a href="#" class="btn btn-otline-dark align-items-center"><i
                                                class="icon-share"></i> Share</a>
                                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i>
                                            Print</a>
                                        <a href="#" class="btn btn-success text-white me-0"><i
                                                class="icon-download"></i> Export</a>
                                    </div>
                                </div>
                            </div>



                            <!-- Add-course starts -->

                                <!-- course starts -->
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show" id="aud" role="tabpanel"
                                        aria-labelledby="aud">
                                        <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title"></h4>
                                                    <p class="card-description">
                                                    <h5>No of Students</h5>
                                                    <h4> {{ $No_student }}</h4>
                                                    </p>
                                                    <br>
                                                    <div class="container float-right">
                                                        @if (session()->has('deletecourse'))
                                                            @if (session('deletecourse') == 'Course Imagae not found')
                                                                <span
                                                                    class="alert alert-danger">{{ session('deletecourse') }}</span>
                                                            @else
                                                                <span
                                                                    class="alert alert-success">{{ session('deletecourse') }}</span>
                                                            @endif


                                                        @endif
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped" id="studentTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Student Name
                                                                    </th>
                                                                    <th>
                                                                        Parent Name
                                                                    </th>
                                                                    <th>
                                                                        Class
                                                                    </th>
                                                                    <th>
                                                                        Subject
                                                                    </th>
                                                                    <th>
                                                                        Board
                                                                    </th>
                                                                    <th>
                                                                        Fee
                                                                    </th>
                                                                    <th>
                                                                        Duration
                                                                    </th>
                                                                    <th>
                                                                        City
                                                                    </th>
                                                                    <th>
                                                                        Area
                                                                    </th>
                                                                    <th>
                                                                        Delete
                                                                    </th>
                                                                    <th>
                                                                       View all Detail
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($students as $student)
                                                                    <tr>
                                                                        <td> {{ $student->Name}} </td>
                                                                        <td> {{ $student->Parent_name}} </td>
                                                                        <td> {{ $student->Class }} </td>
                                                                        <td> {{ $student->Subject }} </td>
                                                                        <td> {{ $student->Board }} </td>
                                                                        <td> {{ $student->fee }} </td>
                                                                        <td> {{ $student->duration }} </td>
                                                                        @php
                                                                            $city = DB::table('cities')->where('city_id',$student->city)->first();
                                                                            $area = DB::table('area_in_cities')->where('city_id',$student->city)->where('id',$student->area)->first();
                                                                        @endphp
                                                                        @if ($city && $area)
                                                                        <td> {{ $city->city_name }} </td>
                                                                        <td> {{ $area->area_name }} </td>
                                                                        @else
                                                                        <td> Not Found </td>
                                                                        <td> Not Found </td>
                                                                        @endif
                                                                        <td> <a
                                                                                href="#"><button
                                                                                    class="btn btn-danger ">
                                                                                    <i class="mdi mdi-delete"></i></button></a></td>
                                                                                    <td> <a
                                                                                        href="{{route('studentdetail', $student->student_id)}}"><button
                                                                                            class="btn btn-primary ">
                                                                                            <i class="mdi mdi-eye"></i></button></a></td>


                                                                    </tr>

                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>


                        </div>
                        <!-- Course ends-->
                        <!--Add Course ends-->
                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                            aria-labelledby="overview">
                            <div class="row">
                                {{-- <div class="col-sm-12">
                                    <div class="statistics-details d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="statistics-title">No of Teachers</p>
                                            <h3 class="rate-percentage">{{ $No_Teacher }}</h3>

                                        </div>
                                        <div>
                                            <p class="statistics-title">Page Views</p>
                                            <h3 class="rate-percentage">7,682</h3>
                                            <p class="text-success d-flex"><i
                                                    class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                                        </div>
                                        <div>
                                            <p class="statistics-title">New Sessions</p>
                                            <h3 class="rate-percentage">68.8</h3>
                                            <p class="text-danger d-flex"><i
                                                    class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <p class="statistics-title">Avg. Time on Site</p>
                                            <h3 class="rate-percentage">2m:35s</h3>
                                            <p class="text-success d-flex"><i
                                                    class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <p class="statistics-title">New Sessions</p>
                                            <h3 class="rate-percentage">68.8</h3>
                                            <p class="text-danger d-flex"><i
                                                    class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <p class="statistics-title">Avg. Time on Site</p>
                                            <h3 class="rate-percentage">2m:35s</h3>
                                            <p class="text-success d-flex"><i
                                                    class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="row">
                                <div class="col-lg-18 d-flex flex-column">
                                    <div class="row flex-grow">

                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div
                                                            class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h4 class="card-title card-title-dash">Teachers Table
                                                                </h4>
                                                                <h5>No of Teacher</h5>
                                                    <h4> {{ $No_Teacher }} </h4>
                                                            </div>
                                                            @if (session()->has('deleteteacher'))
                                                                <span
                                                                    class="alert alert-success">{{ session('deleteteacher') }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="table-responsive  mt-1">
                                                            <table class="table select-table" id="myTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div
                                                                                class="form-check form-check-flat mt-0">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        aria-checked="false"><i
                                                                                        class="input-helper"></i></label>
                                                                            </div>
                                                                        </th>
                                                                        <th>S No</th>
                                                                        <th> Name</th>
                                                                        <th> Email</th>
                                                                        <th> Contact Number</th>
                                                                        <th> Adhaar Number</th>
                                                                        <th> Address</th>
                                                                        <th>Qualification</th>
                                                                        <th> Board</th>
                                                                        <th>Gender</th>
                                                                        <th>View More</th>
                                                                        <th>Status</th>
                                                                        <th>Delete </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($teachers as $teacher)
                                                                        <tr>
                                                                            <td>
                                                                                <div
                                                                                    class="form-check form-check-flat mt-0">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            aria-checked="false"><i
                                                                                            class="input-helper"></i></label>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h6> {{ $teacher->id }} </h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6> {{ $teacher->name }} </h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $teacher->email}}</h6>
                                                                            </td>


                                                                            <td>
                                                                                <h6>{{ $teacher->phone_number}}
                                                                                </h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $teacher->adhaar_number }}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $teacher->permanent_address }}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $teacher->qualification }}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $teacher->board_name }}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{$teacher->gender}}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <a href="{{ route('teacherdetail', $teacher->Teacher_id) }}"><div class="btn btn-sm btn-primary">view more</div> </a>


                                                                            </td>

                                                                            @if ($teacher->status == "not approved")
                                                                                <td>

                                                                                    <a href="{{url('changestatus').'/'.$teacher->Teacher_id }}"> <h6 class="text text-danger"> {{ $teacher->status }} </h6> </a>
                                                                                </td>
                                                                            @else
                                                                                <td>

                                                                                        <a href="{{url('changestatus').'/'.$teacher->Teacher_id }}">  <h6 class="text text-success">{{ $teacher->status }}   </h6></a>




                                                                                </td>
                                                                            @endif

                                                                            <td><a
                                                                                    href="{{ route('deleteteacher', $teacher->Teacher_id) }}"><button
                                                                                        class="btn btn-sm btn-danger ">
                                                                                        Delete</button></a></td>
                                                                        </tr>
                                                                    @endforeach

                                                                </tbody>
                                                            </table>
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
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Free 24/7 customer
                        support, updates, and more with Faizan Khan </span>
                    <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights
                        reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
</script src="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/14.0.0/material-components-web.min.js"></script>
<scrip scr="https://cdn.datatables.net/2.0.8/js/dataTables.material.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <!-- plugins:js -->
    <script src="/src/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/src/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/src/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/src/assets/js/off-canvas.js"></script>
    <script src="/src/assets/js/hoverable-collapse.js"></script>
    <script src="/src/assets/js/template.js"></script>
    <script src="/src/assets/js/settings.js"></script>
    <script src="/src/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/src/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/src/assets/js/dashboard.js"></script>

    <script src="/src/assets/js/uploadimg.js"></script>
    <!-- <script src="../../assets/js/Chart.roundedBarCharts.js"></script> -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <!-- End custom js for this page-->
    <script>
        $(document).ready(function() {
            let table = new DataTable('#myTable');
            let studentTable = new DataTable('#studentTable');
        });
    </script>
</body>

</html>
