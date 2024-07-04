<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a id="admin" href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Local Learning</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>

            <a href="/contact" class="nav-item nav-link">Contact</a>
            <a href="/faq" class="nav-item nav-link">FAQ</a>
        </div>
        <a href="{{ route('RegisterTeacher') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"> <i class="fa fa-arrow-left ms-1 "></i> &nbsp;Find Tuition
           </a>
        <a href="{{ route('RegisterStudent') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Find Tutor <i
                class="fa fa-arrow-right ms-3"></i></a>
                <div id="google_translate_element"class="bg-primary d-flex justify-content-center align-items-center" style="height: 75px;">

                </div>
    </div>



</nav>
<script type="text/javascript">

    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
