
//This View for When  Reequired Otp for Register Teacher

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Teacher Registration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">



    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <!-- Libraries Stylesheet -->




    <!--  Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!--  Stylesheet -->

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Bootstrap 4 CSS -->

    <!-- Telephone Input CSS -->

    <!-- Icons CSS -->
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <!-- Nice Select CSS -->
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>


    <link rel="stylesheet" href="/css/multi_form.css">
    <!-- Demo CSS -->
    <link rel="stylesheet" href="/css/demo.css">
    <link href="/css/style.css" rel="stylesheet">
    <style type="text/css">
        .card {
            width: 400px;
            border: none;
            height: 300px;
            box-shadow: 0px 5px 20px 0px #d2dae3;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            border-radius: 10px;
            z-index: 999999;

        }


        .card h6 {
            color: rgb(8, 197, 197);
            font-size: 20px
        }

        .inputs input {
            width: 40px;
            height: 40px
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0
        }

        @media screen and (max-width: 575px) {

            .card {
                position: relative;
                left: 20%;
            }

            #center {
                position: relative;

                top: 40%;
            }
        }

        #center {
            position: relative;
            left: -20%;
            top: 20%;
        }


        .form-control:focus {
            box-shadow: none;
            border: 2px solid aqua;
        }

        .validate {
            border-radius: 20px;
            height: 40px;
            background-color: rgb(8, 197, 197);
            border: 1px solid aqua;
            width: 140px;
        }

        .blur {
            height: 100%;
            width: 100%;
            position: absolute;
            z-index: 999;

            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="blur">
        <div class="container height-100  width-100 d-flex justify-content-center align-items-center " id="center">
            <div class="position-relative">
                <div class="card p-2 text-center">
                    <h6>Please enter the one time password <br> to verify your account</h6>
                    <div> <span>A code has been sent to</span>

                        <small id="mobile_number"></small>

                    </div>
                    <form id="otpform">
                        <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                            <input class="m-2 text-center form-control rounded" type="text" id="first"
                                maxlength="1" name="digit1" />

                            <input class="m-2 text-center form-control rounded" type="text" id="second"
                                maxlength="1"name="digit2" />
                            <input class="m-2 text-center form-control rounded" type="text" id="third"
                                maxlength="1" name="digit3" />
                            <input class="m-2 text-center form-control rounded" type="text" id="fourth"
                                maxlength="1" name="digit4" />

                        </div>


                        <div class="mt-4"> <button class="btn btn-danger px-4 validate"
                                type="submit">Validate</button>
                    </form>
                    <br>
                    <br>
                    <form action="" id="resend">
                    <span>Didn't get the code</span>
<input type="text" value="" class="form-control" id="mobile_number" name="mobile_number" style="display: none;">
                 <a href="#" type="submit" class="text-decoration-none ms-3">Resend</a>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Local Learning</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/courses" class="nav-item nav-link">Courses</a>

                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ route('course') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login Now<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->

    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Teacher Registration</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="/">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Student Registration
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <main>

        <article>

            <!-- Start Multiform HTML -->
            <section class="multi_step_form">
                <form class="registerform" id="msform" enctype="multipart/form-data"
                   >
                    <!-- Tittle -->
                    <div class="tittle">
                        <h2>Verification Process</h2>
                        <p>In order to use this service, you have to complete this verification process</p>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" id="alert-success" role="alert"
                        style="display: none;">

                    </div>



                    <div id="error-message" class="alert alert-danger alert-dismissible fade show" role="alert"
                        style="display: none;">

                    </div>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Verify Phone</li>
                        <li>Upload Documents</li>
                        <li>Security Questions</li>

                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h3>Setup your phone</h3>
                        <h6>We will send you a SMS. Input the code to verify.</h6>

                        <div class="form-row">

                            <div class="form-group col-md-6 " style="position: relative; left: 20%;">
                                <input type="number" class="form-control" placeholder="1234567890" name="Contact_number">
                            </div>
                        </div>









                        <button type="button" class="action-button previous_button">Back</button>
                        <button type="button" class="next action-button">Continue</button>
                    </fieldset>
                    <fieldset>
                        <h3>Verify Your Identity</h3>
                        <h6>Please upload any of these documents to verify your Identity.</h6>
                        <div class="passport">
                            <h4>Upload your ID card<br> Upload your Degree<br>Driving License.</h4>
                            <a href="#" class="don_icon"><i class="ion-android-done"></i></a>
                        </div>

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload" name="Adhaar_image"
                                    accept="image/*">
                                <label class="custom-file-label" for="upload"><i
                                        class="ion-android-cloud-outline"></i> Adhaar Image</label>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload2" name="Degree_image"
                                    accept="image/*">
                                <label class="custom-file-label" for="upload2"><i
                                        class="ion-android-cloud-outline"></i> Degree Image</label>
                            </div>
                        </div>

                        <button type="button" class="action-button previous previous_button">Back</button>
                        <button type="button" class="next action-button">Continue</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-group">

                            <input type="text" class="form-control form-control-lg" placeholder="Teacher Name"
                                name="name">

                        </div>
                        <label for="exampleInputEmail1" style="display: block; float: left; ">&nbsp;&nbsp;Date of Birth</label>
                        <div class="form-group">

                            <input data-placeholder="DOB" type="date" class="form-control form-control-lg"
                                name="Dob" id="exampleFormControlInput1">
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control form-control-lg" placeholder="WhatsApp Number"
                                name="WhatsApp_number">

                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-lg" placeholder="Adhaar Number"
                                name="Adhaar_number">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Present Address"
                                name="presentaddress">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Permanent Address" name="permanentaddress">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Tuition Name"
                                name="tuitionname">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Teaching Experience" name="teachingexp">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Expected monthly tuition Fee (per Tuition)" name="fee">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Qualification"
                                name="qualification">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Major Subect"
                                name="major">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Subject/class which you can teach" name="subject">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Board Name"
                                name="board">

                        </div>

                        <div class="form-group">

                            <select name="gender" class="form-select">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                placeholder="Password" name="password">

                        </div>
                        <button type="button" class="action-button previous previous_button">Back</button>
                        <button type="submit" class="action-button">Finish</button>
                    </fieldset>
                </form>

            </section>
            <!-- END Multiform HTML -->
        </article>
    </main>


    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/multi_form_script.js"></script>
    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
    <script src="/src/assets/js/uploaddoc.js"></script>
    <!--Ajax Form Script-->
    <script type="text/javascript">
        $(document).ready(function() {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "1000",
                "hideDuration": "2000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "show",
                "hideMethod": "hide"
            };

            var form = document.getElementById("msform");

            form.addEventListener("submit", function(event) {
                event.preventDefault();

                var formdata = new FormData(form);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('RegisterTeacherData') }}",
                    data: formdata,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        // console.log(data);
                        var Showerror = document.getElementById("error-message");
                        $('.blur').show();
                        var mobile_number = document.getElementById("mobile_number");
                        mobile_number.innerHTML = formdata.get("Contact_number");
                        Showerror.style.display = "none";
                        $('#alert-success').show();
                        $('#alert-success').text(data.success);
                        toastr.success('Sent OTP Successfully');
                        window.scrollTo(0, -100);
                        $("body").css("overflow", "hidden");
                    },
                    error: function(error) {
                        var Showerror = document.getElementById("error-message");
                        Showerror.style.display = "block";
                        Showerror.innerHTML = '';
                        var errors = error.responseJSON.errors;
                        $.each(errors, (key, value) => {
                            Showerror.innerHTML += value + '<br>';
                        });
                        toastr.error('Something Went Wrong !');
                    }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function(event) {
            function OTPInput() {
                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('keydown', function(event) {
                        if (event.key === "Backspace") {
                            inputs[i].value = '';
                            if (i !== 0) inputs[i - 1].focus();
                        } else {
                            if (i === inputs.length - 1 && inputs[i].value !== '') {
                                return true;
                            } else if (event.keyCode > 47 && event.keyCode < 58) {
                                inputs[i].value = event.key;
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            } else if (event.keyCode > 64 && event.keyCode < 91) {
                                inputs[i].value = String.fromCharCode(event.keyCode);
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            }
                        }
                    });
                }
            }
            OTPInput();
        });

        var otpform = document.getElementById("otpform");
        otpform.addEventListener("submit", function(event) {
            event.preventDefault();
            var otpformdata = new FormData(otpform);
            $.ajax({
                type: 'POST',
                url: "{{ route('verifyOTP') }}",
                data: otpformdata,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if (data.error) {
                        toastr.error('Otp is not correct');
                    } else {
                        toastr.success('Registration Successful Please Wait for approval');
                        setTimeout(function() {
                            window.location.href = '/';
                        }, 2000);
                    }
                },
                error: function(error) {
                    var errors2 = error.responseJSON.errors;
                    // Handle errors if needed
                }
            });
        });
    </script>

    <script type="text/javascript">
    </script>
</body>


</html> --}}
