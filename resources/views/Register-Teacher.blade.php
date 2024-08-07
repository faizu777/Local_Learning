<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Teacher Registration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    @include('favicon')

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
    {{-- <style type="text/css">
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
    </style> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @media screen and (max-width: 767px)
    {
        #login{
            margin-bottom : 10px;


        }
        #number
        {
            width: 220px !important;
        }
        ol, ul
         {
    padding-left: 5rem;
}
    }

    @media (max-width: 768px) {
    .multi_step_form #msform fieldset .input-group .custom-file .custom-file-label {
        width: 50%;
        text-align: left;
        height: 55px;
        padding: 10px;
    }
}
</style>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a id="admin" href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-0 px-lg-0">
            <img src="{{asset('logo/logo1.png')}}" alt="" width="150" height="75" class="d-inline-block align-top">
         </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>


                <a href="/contact" class="nav-item nav-link">Contact</a>
                <a href="/faq" class="nav-item nav-link">Faq</a>
<div class="btn btn-primary btn-lg d-flex align-items-center justify-content-center">
                <a href="{{ route('login-user-page') }}" class="nav-item" style="color: white; height:100%; width:100%;margin-top:18px;" id="login">Login Now<i
                    class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>

        </div>

    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->

    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Find Your Tuition Now</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="/">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Teacher Registration
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
                        <h6>We will send you a Notification and Updates on your Contact Number.</h6>

                        <div class="form-row">

                            <div class="form-group col-md-6 " style="position: relative; left: 20%;">
                                <input type="number" class="form-control" placeholder="+91 Contact Number" name="Contact_number" maxlength="10" oninput="validateInput(this)" style="border-radius: 10px;" id="number">
                            </div>
                        </div>
                        <button type="button" class="action-button previous_button">Back</button>
                        <button type="button" class="next action-button">Continue</button>
                    </fieldset>
                    <fieldset>
                        <h3>Verify Your Identity</h3>
                        <h6>Please upload any of these documents to verify your Identity.</h6>
                        <div class="passport">
                            <h4>Upload your ID card<br> Upload your Degree</h4>
                            <a href="#" class="don_icon"><i class="ion-android-done"></i></a>
                        </div>
                        {{-- <div class="input-group">
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
                        </div> --}}
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload" name="Adhaar_images[]" accept="image/*" multiple>
                                <label class="custom-file-label" for="upload"><i class="ion-android-cloud-outline"></i> Aadhaar Image</label>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="upload2" name="Degree_images[]" accept="image/*" multiple>
                                <label class="custom-file-label" for="upload2"><i class="ion-android-cloud-outline"></i> Degree Image</label>
                            </div>
                        </div>

                        <button type="button" class="action-button previous previous_button">Back</button>
                        <button type="button" class="next action-button">Continue</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-group" >

                            <input type="text" class="form-control form-control-lg" placeholder="Teacher Name"
                                name="name" style="border-radius: 10px;">

                        </div>
                        <label for="exampleInputEmail1" style="display: block; float: left; ">&nbsp;&nbsp;Date of Birth</label>
                        <div class="form-group">

                            <input data-placeholder="DOB" type="date" class="form-control form-control-lg"
                                name="Dob" id="exampleFormControlInput1" style="border-radius: 10px;">
                        </div>
                        <div class="form-group">

                            <input placeholder="Email" type="email" class="form-control form-control-lg"
                                name="email" id="exampleFormControlImail" style="border-radius: 10px;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" style="display: block; float: left; ">&nbsp;&nbsp;Profile</label>
                            <input type="file" class="form-control  bg-primary"


                            name="profile_pic" id="profile_pic" style="border-radius: 10px;" title="Upload your Recent profile picture">


                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-lg" placeholder="WhatsApp Number"
                                name="WhatsApp_number" style="border-radius: 10px;">

                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-lg" placeholder="Adhaar Number"
                                name="Adhaar_number" style="border-radius: 10px;">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Present Address"
                                name="presentaddress" style="border-radius: 10px;">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Permanent Address" name="permanentaddress" style="border-radius: 10px;">

                        </div>
                        <div class="form-group">

                            <select name="city" class="form-select" style="color: black; border-radius: 10px;" id="city">
                                <option selected value="">Select City</option>

                            </select>
                        </div>
                        <div class="form-group">

                            <select name="area" class="form-select" style="color: black; border-radius: 10px;" id="area">
                                <option selected value="">Select Area</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Tuition Name"
                                name="tuitionname" style="border-radius: 10px;">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Teaching Experience" name="teachingexp" style="border-radius: 10px;">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Expected monthly tuition Fee (per Tuition)" name="fee" style="border-radius: 10px;">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Qualification"
                                name="qualification" style="border-radius: 10px;">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Major Subect"
                                name="major" style="border-radius: 10px;">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Subject/class which you can teach" name="subject" style="border-radius: 10px;">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Board Name"
                                name="board" style="border-radius: 10px;">

                        </div>

                        <div class="form-group">

                            <select name="gender" class="form-select" style="border-radius: 10px;">
                                <option value="male" style="border-radius: 10px;">Male</option>
                                <option value="female" style="border-radius: 10px;">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                placeholder="Password" name="password" style="border-radius: 10px;">

                        </div>
                        <button type="button" class="action-button previous previous_button">Back</button>
                        <button type="submit" class="action-button">Finish</button>
                    </fieldset>
                </form>

            </section>
            <!-- END Multiform HTML -->
        </article>
    </main>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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
    <script>
        $(document).ready(function() {
    $('#city').on('change', function() {
        var cityId = $(this).val();
        $.ajax({
            type: 'GET',
            url: '/area/' + cityId,
            success: function(data) {
                $('#area').empty();
                $.each(data.area, function(index, area) {
                    $('#area').append('<option value="' + area.id + '">' + area.area_name + '</option>');
                });
            }
        });
    });
});
    </script>
    <script>
        $(document).ready(function() {

            $.ajax({
            type: 'GET',
            url: '/city',
            success: function(data) {

                $.each(data.city, function(index, city) {
                    $('#city').append('<option value="' + city.city_id + '">' + city.city_name + '</option>');
                });
            }
        });
        });

</script>

        <script>
        function validateInput(input) {
            // Convert the value to a string and slice it to ensure it's no longer than 10 characters
            input.value = input.value.slice(0, 10);

            // If the value is not a number or starts with 0, reset it
            if (isNaN(input.value) || input.value.startsWith('0')) {
                input.value = input.value.replace(/[^1-9][0-9]*$/, '');
            }
        }
    </script>

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

            toastr.info('Sending request, please wait...');

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
                    toastr.clear(); // Clear the sending request notification
                    toastr.success('Registration Successful. Please wait for approval.');
                    setTimeout(function() {
                        window.location.href = '/';
                    }, 2000);
                },
                error: function(error) {
                    toastr.clear(); // Clear the sending request notification
                    var Showerror = document.getElementById("error-message");
                    Showerror.style.display = "block";
                    Showerror.innerHTML = '';
                    var errors = error.responseJSON.errors;
                    $.each(errors, (key, value) => {
                        Showerror.innerHTML += value + '<br>';
                    });
                    toastr.error('Something went wrong!');
                }
            });
        });
    });
</script>


    <script type="text/javascript">
    </script>
</body>


</html>
