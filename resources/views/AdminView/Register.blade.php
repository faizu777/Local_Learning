<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/src/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="/src/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/src/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/src/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/src/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/src/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/src/assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon"href="/src/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{asset('logo/logo1.png')}}" alt="logo">
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Register Your User </h6>
                            <form class="pt-3" action="{{ route('Register') }}" method="post">
                                <div class="form-group">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="UserName" name="name">
                                    @error('name')
                                        <span class="text text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="UserEmail" name="email">
                                    @error('email')
                                        <span class="text text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password" name="password">
                                    @error('password')
                                        <span class="text text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <input type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        value="Register">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/template.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
