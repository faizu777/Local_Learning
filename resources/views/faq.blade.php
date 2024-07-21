<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Faq </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=" Learning Platform " name="keywords">
    <meta content="" name="description">

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

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized  Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

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
   @include('navbar')
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">FAQ & HELP</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">faq</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- FAQ 2 - Bootstrap Brain Component -->
<section class="bsb-faq-2 bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row gy-5 gy-lg-0">
      <div class="col-12 col-lg-6">
        <h2 class="h1 mb-3">How can we help you? Unlocking possibilities for your education FAQs answered. </h2>
        <p class="lead fs-4 text-secondary mb-4">We hope you have found an answer to your question. If you need any help, please search your query on our Support Center or contact us via email.</p>
        <a href="/contact" class="btn btn-lg bsb-btn-2xl btn-primary">All FAQ</a>
      </div>
      <div class="col-12 col-lg-6">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-11">
            <div class="accordion accordion-flush" id="accordionExample">
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What kind of education and training do your tutors have?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Our tutors are highly qualified and experienced educators with a minimum of a Bachelor's degree in their subject area. Many of our tutors also hold advanced degrees, such as Master's or Ph.D.s. We also conduct thorough background checks and verify their credentials to ensure they meet our high standards.</p>
                    <ul>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingone">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone" aria-expanded="false" aria-controls="collapseone">
                    How Does Payment System Work?
                  </button>
                </h2>
                <div id="collapseone" class="accordion-collapse collapse" aria-labelledby="headingone">
                  <div class="accordion-body">
                    A payment system is a way to transfer money from one person or organization to another. It is a complex process that involves many different parties, including banks, credit card companies, and merchants.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What kind of tutoring services do you offer?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                  <div class="accordion-body">
                    We offer one-on-one online tutoring sessions in a wide range of subjects, including math, science, English, and test preparation (SAT, ACT, GRE, etc.). We also offer group tutoring sessions and homework help for students of all ages and skill levels.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="heading3">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    How do you charge for tutoring services?
                  </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3">
                  <div class="accordion-body">
                    We offer competitive hourly rates for our tutoring services, with discounts available for package deals and long-term commitments. We also offer a free initial consultation to discuss your tutoring needs and create a personalized learning plan.
                  </div>
                </div>
              </div>



              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="heading4">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    What is your tutoring approach or methodology?
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4">
                  <div class="accordion-body">
                    Our tutors use a student-centered approach, tailoring their teaching style to meet the individual needs and learning style of each student. We focus on building confidence, improving understanding, and developing critical thinking skills to help students achieve academic success.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How do I schedule a tutoring session?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                  <div class="accordion-body">
                    You can schedule a tutoring session by logging into your account on our website, calling our customer support team, or using our mobile app. We offer flexible scheduling to accommodate your busy schedule, including evenings and weekends.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    What is your policy on refunds or cancellations?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                  <div class="accordion-body">
                    We understand that sometimes schedules change. If you need to cancel or reschedule a tutoring session, please provide at least 24 hours' notice to avoid any penalties. We also offer a satisfaction guarantee, and if you're not satisfied with our services, we'll provide a full refund.
                  </div>
                </div>
              </div>
              <div class="accordion-item shadow-sm">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    How do I communicate with my tutor?
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                  <div class="accordion-body">
                    <p>You can communicate with your tutor through our secure online platform, which includes video conferencing, messaging, and file sharing. You can also contact our customer support team if you have any questions or concerns.</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<script>
    $(document).ready(function()
    {

     // Select the "About" link
var aboutLink = document.querySelector('.navbar-nav .nav-link[href="/faq"]');

// Add the 'active' class to the "About" link
if (aboutLink) {
    aboutLink.classList.add('active');
}

      console.log('ready');


    });
  </script>
</html>
