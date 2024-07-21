<!DOCTYPE html>
<html lang="en">
    <style>



        .box-minmax {
          margin-top: 10px;
          width: 328px;
          display: flex;
          justify-content: space-between;
          font-size: 20px;
          color: aqua;
        }
        .box-minmax span:first-child {
          margin-left: 10px;
        }

        .range-slider {

        }

        .rs-range {
          margin-top: 29px;
          width: 320px;
          -webkit-appearance: none;
        }
        .rs-range:focus {
          outline: none;
        }
        .rs-range::-webkit-slider-runnable-track {
          width: 100%;
          height: 3px;
          cursor: pointer;
          box-shadow: none;
          background: aqua;
          border-radius: 0px;
          border: 0px solid #010101;
        }
        .rs-range::-moz-range-track {
          width: 100%;
          height: 1px;
          cursor: pointer;
          box-shadow: none;
          background: aqua;
          border-radius: 0px;
          border: 0px solid #010101;
        }
        .rs-range::-webkit-slider-thumb {
          box-shadow: none;
          border: 0px solid #ffffff;
          box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
          height: 32px;
          width: 22px;
          border-radius: 22px;
          background: aqua;
          cursor: pointer;
          -webkit-appearance: none;
          margin-top: -20px;
        }
        .rs-range::-moz-range-thumb {
          box-shadow: none;
          border: 0px solid #ffffff;
          box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.25);
          height: 42px;
          width: 22px;
          border-radius: 22px;
          background: white;
          cursor: pointer;
          -webkit-appearance: none;
          margin-top: -20px;
        }
        .rs-range::-moz-focus-outer {
          border: 0;
        }

        .rs-label {
          position: relative;
          transform-origin: center center;
          display: block;
          width: 40px;
          height: 40px;
          background: transparent;
          border-radius: 50%;
          line-height: 3px;
          text-align: center;
          font-weight: bold;
          padding-top: 9px;
          box-sizing: border-box;
          border: 2px solid aqua;
          margin-top: 10px;
          margin-left: 0px;
          left: attr(value);
          color: ;
          font-style: normal;
          font-weight: normal;
          line-height: normal;
          font-size: 12px;
        }
        @media (max-width: 768px)
        {
            .rs-range {
    margin-top: 29px;
    width: 300px;
    -webkit-appearance: none;
}
.box-minmax {
    margin-top: 10px;
    width: 300px;
    display: flex;
    justify-content: space-between;
    font-size: 20px;
    color: aqua;
}
        }

        </style>
<head>

    <meta charset="utf-8">
    <title>Student Registration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    @include('favicon')

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

 <!-- Template Stylesheet -->
 <link href="/css/style.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Stylesheet -->

</head>

<script></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    {{-- <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Local Learning</h2>
        </a>
        <button tittle="Toggle Navbar" type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/courses" class="nav-item nav-link">Courses</a>

                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ route('login-user-page') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav> --}}
    @include('navbar')
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Find Your Tutor Now </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="/">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Student Registration</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Student Registration Start -->
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <h4 class="alert alert-primary text-center">
                Confused whether your child need a home tutor ?


                 </h4>
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{asset('logo/logo1.png')}}" alt="logo">
                            </div>


                            <h6 class="fw-light">Find Your Tutor Now  </h6>
                            <div class="alert alert-success alert-dismissible fade show" id="alert-success" role="alert" style="display: none;">

                            </div>
                            <div id="error-message" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">

                            </div>
                            <form class="pt-3" id="registerForm" enctype="multipart/form-data">
                                <div class="form-group">
                                    @csrf
                                    <input type="text" class="form-control form-control-lg "
                                        placeholder="Student Name" name="name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Profile Picture (Optional) </label>
                                    <input type="file" class="form-control form-control-lg bg-primary"


                                    name="profile_pic" id="profile_pic">


                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Class" name="class">


                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Parent Name" name="parent_name">


                                </div>

                                <div class="form-group">

                                   <input type="text" class="form-control form-control-lg"

                                        placeholder="Subject" name="subject">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-lg"
                                        placeholder="Contact Number" name="Contact_number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" style="font-size: 15px;" class="text text-primary">Payment</label>

                                        <div class="range-slider">
                                          <span id="rs-bullet" class="rs-label">0</span>
                                          <input id="rs-range-line" class="rs-range primary" type="range" value="0" min="300" max="5000" name="fee">



                                        <div class="box-minmax">
                                          <span class="text text-primary">300</span><span class="text text-primary">5000</span>
                                        </div>

                                      </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Board" name="board">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Address" name="address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Duration" name="duration">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Choose Tutor Gender</label>
                                    <select name="gender" class="form-select" style="color: black; border-radius: 10px;">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city">ChooseCity</label>
                                    <select name="city" class="form-select" style="color: black; border-radius: 10px;" id="city">
                                        <option selected >Select City</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="area">Choose Area</label>
                                    <select name="area" class="form-select" style="color: black; border-radius: 10px;" id="area">
                                        <option selected >Select Area</option>

                                    </select>
                                </div>


                                <div class="mt-3">
                                    <input type="submit"
                                        class="btn btn-block btn-primary btn-sm font-weight-large auth-form-btn"
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
    <!-- 404 End -->


    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="/lib/wow/wow.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
     <script src="/lib/easing/easing.min.js"></script>
     <script src="/lib/waypoints/waypoints.min.js"></script>
     <script src="/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
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

    <!-- Ajax Form Script -->
    <script type="text/javascript">
        $(document).ready(function () {
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

            var form = document.getElementById("registerForm");
            form.addEventListener("submit", function (event) {
                event.preventDefault();

                var formdata = new FormData(form);
                $.ajax({
                    type: 'POST',
url: "{{route('Student_Register_Detail')}}",

data: formdata,
contentType: false,
processData: false,
success: function (data) {
    var Showerror= document.getElementById("error-message");
    Showerror.style.display="none";
    $('#alert-success').show();
    $('#alert-success').text(data.success);
  toastr.success('Register Successfully');


},

error:function (error)
 {
    var Showerror= document.getElementById("error-message");
    Showerror.style.display="block";
    Showerror.innerHTML='';

   var errors=error.responseJSON.errors;

    $.each(errors,(key,value)=>{
        Showerror.innerHTML+= value+'<br>';

    });

    toastr.error('Something Went Wrong !');
},



                });
            });
                });
                </script>
                <script>
                    var rangeSlider = document.getElementById("rs-range-line");
var rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function showSliderValue() {
  rangeBullet.innerHTML = rangeSlider.value;
  var bulletPosition = (rangeSlider.value /rangeSlider.max);
  rangeBullet.style.left = (bulletPosition * 295) + "px";
}
                </script>

</body>


</html>
