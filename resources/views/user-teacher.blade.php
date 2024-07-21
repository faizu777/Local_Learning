<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Tutors Wallah </title>
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

</head>
<style>

    .profile-header {
    position: relative;
    overflow: hidden;
    height: 120px;

}

.profile-header .profile-header-cover {
    background-image: url(https://bootdey.com/img/Content/bg1.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0
    height: 120px;
}

.profile-header .profile-header-cover:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #23e1e9;
background-image: linear-gradient(160deg, #23e1e9 0%, #4ec8b4 50%, #158677 100%);

height: 120px;
}

.profile-header .profile-header-content {
    color: #fff;
   height: 120px;

}

.profile-header-img {
    float: left;
    width: 100px;
    height: 100px;
    overflow: hidden;
    aspect-ratio: 3/2;
    object-fit: contain;
    position: relative;
    top: -10px;
    z-index: 10;
    margin: 0 0 -20px;

    border : 4px solid #fff;
    border-radius: 50%;
    background: #fff

}

.profile-header-img img {
    max-width: 100%

}

.profile-header-info h4 {

    font-weight: 500;
    color: #fff;
    position: relative;
    top: -20px;



}

.profile-header-img+.profile-header-info {
    margin-left: 120px
}

.profile-header .profile-header-content,
.profile-header .profile-header-tab {
    position: relative
}

.b-minus-1,
.b-minus-10,
.b-minus-2,
.b-minus-3,
.b-minus-4,
.b-minus-5,
.b-minus-6,
.b-minus-7,
.b-minus-8,
.b-minus-9,
.b-plus-1,
.b-plus-10,
.b-plus-2,
.b-plus-3,
.b-plus-4,
.b-plus-5,
.b-plus-6,
.b-plus-7,
.b-plus-8,
.b-plus-9,
.l-minus-1,
.l-minus-2,
.l-minus-3,
.l-minus-4,
.l-minus-5,
.l-minus-6,
.l-minus-7,
.l-minus-8,
.l-minus-9,
.l-plus-1,
.l-plus-10,
.l-plus-2,
.l-plus-3,
.l-plus-4,
.l-plus-5,
.l-plus-6,
.l-plus-7,
.l-plus-8,
.l-plus-9,
.r-minus-1,
.r-minus-10,
.r-minus-2,
.r-minus-3,
.r-minus-4,
.r-minus-5,
.r-minus-6,
.r-minus-7,
.r-minus-8,
.r-minus-9,
.r-plus-1,
.r-plus-10,
.r-plus-2,
.r-plus-3,
.r-plus-4,
.r-plus-5,
.r-plus-6,
.r-plus-7,
.r-plus-8,
.r-plus-9,
.t-minus-1,
.t-minus-10,
.t-minus-2,
.t-minus-3,
.t-minus-4,
.t-minus-5,
.t-minus-6,
.t-minus-7,
.t-minus-8,
.t-minus-9,
.t-plus-1,
.t-plus-10,
.t-plus-2,
.t-plus-3,
.t-plus-4,
.t-plus-5,
.t-plus-6,
.t-plus-7,
.t-plus-8,
.t-plus-9 {
    position: relative!important
}

.profile-header .profile-header-tab {
    background: #fff;
    list-style-type: none;
    margin: -10px 0 0;
    padding: 0 0 0 140px;
    white-space: nowrap;
    border-radius: 0
}

.text-ellipsis,
.text-nowrap {
    white-space: nowrap!important
}

.profile-header .profile-header-tab>li {
    display: inline-block;
    margin: 0
}

.profile-header .profile-header-tab>li>a {
    display: block;
    color: #929ba1;
    line-height: 20px;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: 700;
    font-size: 12px;
    border: none
}

.profile-header .profile-header-tab>li.active>a,
.profile-header .profile-header-tab>li>a.active {
    color: #242a30
}

.profile-content {
    padding: 25px;
    border-radius: 4px
}

.profile-content:after,
.profile-content:before {
    content: '';
    display: table;
    clear: both
}

.profile-content .tab-content,
.profile-content .tab-pane {
    background: 0 0
}

.profile-left {
    width: 200px;
    float: left
}

.profile-right {
    margin-left: 240px;
    padding-right: 20px
}

.profile-image {
    height: 175px;
    line-height: 175px;
    text-align: center;
    font-size: 72px;
    margin-bottom: 10px;
    border: 2px solid #e2eaeb;
    overflow: hidden;
    border-radius: 4px;



}

.profile-image img {
    display: block;
    max-width: 100%;
    object-fit: cover;

}

.profile-highlight {
    padding: 12px 15px;
    background: #FEFDE1;
    border-radius: 4px
}

.profile-highlight h4 {
    margin: 0 0 7px;
    font-size: 12px;
    font-weight: 700
}

.table.table-profile>thead>tr>th {
    border-bottom: none!important
}

.table.table-profile>thead>tr>th h4 {
    font-size: 20px;
    margin-top: 0
}

.table.table-profile>thead>tr>th h4 small {
    display: block;
    font-size: 12px;
    font-weight: 400;
    margin-top: 5px
}

.table.table-profile>tbody>tr>td,
.table.table-profile>thead>tr>th {
    border: none;
    padding-top: 7px;
    padding-bottom: 7px;
    color: #242a30;
    background: 0 0
}

.table.table-profile>tbody>tr>td.field {
    width: 20%;
    text-align: right;
    font-weight: 600;
    color: #2d353c
}

.table.table-profile>tbody>tr.highlight>td {
    border-top: 1px solid #b9c3ca;
    border-bottom: 1px solid #b9c3ca
}

.table.table-profile>tbody>tr.divider>td {
    padding: 0!important;
    height: 10px
}

.profile-section+.profile-section {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #b9c3ca
}

.profile-section:after,
.profile-section:before {
    content: '';
    display: table;
    clear: both
}

.profile-section .title {
    font-size: 20px;
    margin: 0 0 15px
}

.profile-section .title small {
    font-weight: 400
}

body.flat-black {
    background: #E7E7E7
}

.flat-black .navbar.navbar-inverse {
    background: #212121
}

.flat-black .navbar.navbar-inverse .navbar-form .form-control {
    background: #4a4a4a;
    border-color: #4a4a4a
}

.flat-black .sidebar,
.flat-black .sidebar-bg {
    background: #3A3A3A
}

.flat-black .page-with-light-sidebar .sidebar,
.flat-black .page-with-light-sidebar .sidebar-bg {
    background: #fff
}

.flat-black .sidebar .nav>li>a {
    color: #b2b2b2
}

.flat-black .sidebar.sidebar-grid .nav>li>a {
    border-bottom: 1px solid #474747;
    border-top: 1px solid #474747
}

.flat-black .sidebar .active .sub-menu>li.active>a,
.flat-black .sidebar .nav>li.active>a,
.flat-black .sidebar .nav>li>a:focus,
.flat-black .sidebar .nav>li>a:hover,
.flat-black .sidebar .sub-menu>li>a:focus,
.flat-black .sidebar .sub-menu>li>a:hover,
.sidebar .nav>li.nav-profile>a {
    color: #fff
}

.flat-black .sidebar .sub-menu>li>a,
.flat-black .sidebar .sub-menu>li>a:before {
    color: #999
}

.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a,
.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:focus,
.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:hover,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:focus,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:hover {
    color: #000
}

.flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:focus>a,
.flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:hover>a {
    background: #323232
}

.flat-black .page-sidebar-minified .sidebar .nav li.has-sub>.sub-menu,
.flat-black .sidebar .nav>li.active>a,
.flat-black .sidebar .nav>li.active>a:focus,
.flat-black .sidebar .nav>li.active>a:hover,
.flat-black .sidebar .nav>li.nav-profile,
.flat-black .sidebar .sub-menu>li.has-sub>a:before,
.flat-black .sidebar .sub-menu>li:before,
.flat-black .sidebar .sub-menu>li>a:after {
    background: #2A2A2A
}

.flat-black .page-sidebar-minified .sidebar .sub-menu>li:before,
.flat-black .page-sidebar-minified .sidebar .sub-menu>li>a:after {
    background: #3e3e3e
}

.flat-black .sidebar .nav>li.nav-profile .cover.with-shadow:before {
    background: rgba(42, 42, 42, .75)
}

.bg-white {
    background-color: #fff!important;
}
.p-10 {
    padding: 10px!important;
}
.media.media-xs .media-object {
    width: 32px;
}
.m-b-2 {
    margin-bottom: 2px!important;
}
.media>.media-left, .media>.pull-left {
    padding-right: 15px;
}
.media-body, .media-left, .media-right {
    display: table-cell;
    vertical-align: top;
}
select.form-control:not([size]):not([multiple]) {
    height: 34px;
}
.form-control.input-inline {
    display: inline;
    width: auto;
    padding: 0 7px;
}


.timeline {
    list-style-type: none;
    margin: 0;
    padding: 0;
    position: relative
}

.timeline:before {
    content: '';
    position: absolute;
    top: 5px;
    bottom: 5px;
    width: 5px;
    background: #2d353c;
    left: 20%;
    margin-left: -2.5px
}

.timeline>li {
    position: relative;
    min-height: 50px;
    padding: 20px 0
}

.timeline .timeline-time {
    position: absolute;
    left: 0;
    width: 18%;
    text-align: right;
    top: 30px
}

.timeline .timeline-time .date,
.timeline .timeline-time .time {
    display: block;
    font-weight: 600
}

.timeline .timeline-time .date {
    line-height: 16px;
    font-size: 12px
}

.timeline .timeline-time .time {
    line-height: 24px;
    font-size: 20px;
    color: #242a30
}

.timeline .timeline-icon {
    left: 15%;
    position: absolute;
    width: 10%;
    text-align: center;
    top: 40px
}

.timeline .timeline-icon a {
    text-decoration: none;
    width: 20px;
    height: 20px;
    display: inline-block;
    border-radius: 20px;
    background: #d9e0e7;
    line-height: 10px;
    color: #fff;
    font-size: 14px;
    border: 5px solid #2d353c;
    transition: border-color .2s linear
}

.timeline .timeline-body {
    margin-left: 23%;
    margin-right: 17%;
    background: #fff;
    position: relative;
    padding: 20px 25px;
    border-radius: 6px
}
@media (max-width: 768px)
{
    .timeline .timeline-body {
    margin-left: 25%;
    margin-right: 5%;
    background: #fff;
    position: relative;
    padding: 10px 15px;
    border-radius: 6px
}
}

.timeline .timeline-body:before {
    content: '';
    display: block;
    position: absolute;
    border: 10px solid transparent;
    border-right-color: #fff;
    left: -20px;
    top: 20px
}

.timeline .timeline-body>div+div {
    margin-top: 15px
}

.timeline .timeline-body>div+div:last-child {
    margin-bottom: -20px;
    padding-bottom: 20px;
    border-radius: 0 0 6px 6px
}

.timeline-header {
    padding-bottom: 10px;
    border-bottom: 1px solid #e2e7eb;
    line-height: 30px
}

.timeline-header .userimage {
    float: left;
    width: 34px;
    height: 34px;
    border-radius: 40px;
    overflow: hidden;
    margin: -2px 10px -2px 0
}

.timeline-header .username {
    font-size: 16px;
    font-weight: 600
}

.timeline-header .username,
.timeline-header .username a {
    color: #2d353c
}

.timeline img {
    max-width: 100%;
    display: block
}

.timeline-content {
    letter-spacing: .25px;
    line-height: 18px;
    font-size: 13px
}

.timeline-content:after,
.timeline-content:before {
    content: '';
    display: table;
    clear: both
}

.timeline-title {
    margin-top: 0
}

.timeline-footer {
    background: #fff;
    border-top: 1px solid #e2e7ec;
    padding-top: 15px
}

.timeline-footer a:not(.btn) {
    color: #575d63
}

.timeline-footer a:not(.btn):focus,
.timeline-footer a:not(.btn):hover {
    color: #2d353c
}
.timeline-comment-box {
    background: #f2f3f4;
    margin-left: -25px;
    margin-right: -25px;
    padding: 20px 25px
}

.timeline-comment-box .user {
    float: left;
    width: 34px;
    height: 34px;
    overflow: hidden;
    border-radius: 30px
}

.timeline-comment-box .user img {
    max-width: 100%;
    max-height: 100%
}

.timeline-comment-box .user+.input {
    margin-left: 44px
}

.lead {
    margin-bottom: 20px;
    font-size: 21px;
    font-weight: 300;
    line-height: 1.4;
}

.text-danger, .text-red {
    color: #ff5b57!important;
}
.profile{
    position: fixed;
    top: 0;
    z-index: 99;
}
body{
    background-color: #f4f4f4;
}
label{
  display: inline-block;
  background-color:#04bec4;
  color: white;
  padding: 0.5rem;
  font-family: sans-serif;
  border-radius: 0.3rem;
  cursor: pointer;
  margin-top: 1rem;
}
.input--file {
  position: relative;
  color: #7f7f7f;
  top: 90px;
  width: 30px;
  left: 4%;
  z-index: 9999;
  background:#fff;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.input--file input[type="file"] {
  position: absolute;
  top: 0;
  width: 50px;
  left: 0;
  opacity: 0;
}
.bookshelf_wrapper {
  position: relative;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.books_list {
  margin: 0 auto;
  width: 300px;
  padding: 0;
}

.book_item {
  position: absolute;
  top: -120px;
  box-sizing: border-box;
  list-style: none;
  width: 40px;
  height: 120px;
  opacity: 0;
  background-color: #04bec4;
  border: 5px solid white;
  transform-origin: bottom left;
  transform: translateX(300px);
  -webkit-animation: travel 2500ms linear infinite;
          animation: travel 2500ms linear infinite;
}
.book_item.first {
  top: -140px;
  height: 140px;
}
.book_item.first:before, .book_item.first:after {
  content: "";
  position: absolute;
  top: 10px;
  left: 0;
  width: 100%;
  height: 5px;
  background-color: white;
}
.book_item.first:after {
  top: initial;
  bottom: 10px;
}
.book_item.second:before, .book_item.second:after, .book_item.fifth:before, .book_item.fifth:after {
  box-sizing: border-box;
  content: "";
  position: absolute;
  top: 10px;
  left: 0;
  width: 100%;
  height: 17.5px;
  border-top: 5px solid white;
  border-bottom: 5px solid white;
}
.book_item.second:after, .book_item.fifth:after {
  top: initial;
  bottom: 10px;
}
.book_item.third:before, .book_item.third:after {
  box-sizing: border-box;
  content: "";
  position: absolute;
  top: 10px;
  left: 9px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  border: 5px solid white;
}
.book_item.third:after {
  top: initial;
  bottom: 10px;
}
.book_item.fourth {
  top: -130px;
  height: 130px;
}
.book_item.fourth:before {
  box-sizing: border-box;
  content: "";
  position: absolute;
  top: 46px;
  left: 0;
  width: 100%;
  height: 17.5px;
  border-top: 5px solid white;
  border-bottom: 5px solid white;
}
.book_item.fifth {
  top: -100px;
  height: 100px;
}
.book_item.sixth {
  top: -140px;
  height: 140px;
}
.book_item.sixth:before {
  box-sizing: border-box;
  content: "";
  position: absolute;
  bottom: 31px;
  left: 0px;
  width: 100%;
  height: 5px;
  background-color: white;
}
.book_item.sixth:after {
  box-sizing: border-box;
  content: "";
  position: absolute;
  bottom: 10px;
  left: 9px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  border: 5px solid white;
}
.book_item:nth-child(2) {
  -webkit-animation-delay: 416.6666666667ms;
          animation-delay: 416.6666666667ms;
}
.book_item:nth-child(3) {
  -webkit-animation-delay: 833.3333333333ms;
          animation-delay: 833.3333333333ms;
}
.book_item:nth-child(4) {
  -webkit-animation-delay: 1250ms;
          animation-delay: 1250ms;
}
.book_item:nth-child(5) {
  -webkit-animation-delay: 1666.6666666667ms;
          animation-delay: 1666.6666666667ms;
}
.book_item:nth-child(6) {
  -webkit-animation-delay: 2083.3333333333ms;
          animation-delay: 2083.3333333333ms;
}

.shelf {
  width: 300px;
  height: 5px;
  margin: 0 auto;
  background-color: white;
  position: relative;
}
.shelf:before, .shelf:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #04bec4;
  background-image: radial-gradient(rgba(255, 255, 255, 0.5) 30%, transparent 0);
  background-size: 10px 10px;
  background-position: 0 -2.5px;
  top: 200%;
  left: 5%;
  -webkit-animation: move 250ms linear infinite;
          animation: move 250ms linear infinite;
}
.shelf:after {
  top: 400%;
  left: 7.5%;
}

@-webkit-keyframes move {
  from {
    background-position-x: 0;
  }
  to {
    background-position-x: 10px;
  }
}

@keyframes move {
  from {
    background-position-x: 0;
  }
  to {
    background-position-x: 10px;
  }
}
@-webkit-keyframes travel {
  0% {
    opacity: 0;
    transform: translateX(300px) rotateZ(0deg) scaleY(1);
  }
  6.5% {
    transform: translateX(279.5px) rotateZ(0deg) scaleY(1.1);
  }
  8.8% {
    transform: translateX(273.6px) rotateZ(0deg) scaleY(1);
  }
  10% {
    opacity: 1;
    transform: translateX(270px) rotateZ(0deg);
  }
  17.6% {
    transform: translateX(247.2px) rotateZ(-30deg);
  }
  45% {
    transform: translateX(165px) rotateZ(-30deg);
  }
  49.5% {
    transform: translateX(151.5px) rotateZ(-45deg);
  }
  61.5% {
    transform: translateX(115.5px) rotateZ(-45deg);
  }
  67% {
    transform: translateX(99px) rotateZ(-60deg);
  }
  76% {
    transform: translateX(72px) rotateZ(-60deg);
  }
  83.5% {
    opacity: 1;
    transform: translateX(49.5px) rotateZ(-90deg);
  }
  90% {
    opacity: 0;
  }
  100% {
    opacity: 0;
    transform: translateX(0px) rotateZ(-90deg);
  }
}
@keyframes travel {
  0% {
    opacity: 0;
    transform: translateX(300px) rotateZ(0deg) scaleY(1);
  }
  6.5% {
    transform: translateX(279.5px) rotateZ(0deg) scaleY(1.1);
  }
  8.8% {
    transform: translateX(273.6px) rotateZ(0deg) scaleY(1);
  }
  10% {
    opacity: 1;
    transform: translateX(270px) rotateZ(0deg);
  }
  17.6% {
    transform: translateX(247.2px) rotateZ(-30deg);
  }
  45% {
    transform: translateX(165px) rotateZ(-30deg);
  }
  49.5% {
    transform: translateX(151.5px) rotateZ(-45deg);
  }
  61.5% {
    transform: translateX(115.5px) rotateZ(-45deg);
  }
  67% {
    transform: translateX(99px) rotateZ(-60deg);
  }
  76% {
    transform: translateX(72px) rotateZ(-60deg);
  }
  83.5% {
    opacity: 1;
    transform: translateX(49.5px) rotateZ(-90deg);
  }
  90% {
    opacity: 0;
  }
  100% {
    opacity: 0;
    transform: translateX(0px) rotateZ(-90deg);
  }
}
@media (max-width: 768px) {
#status1{
   margin-top: 10px;
}
#status2{
    margin-top: 10px;
}
#logout-btn
{
    position: relative;
    top: -130px !important;
    margin-right: 1%;
}
}
#logout-btn
{
    position: relative;
    top: -50px;
    margin-right: 1%;
}
#email
{
    position: relative;
    top: -30px;
}
#view-profile
{
    position: relative;
    top: -40px;
}
.status-btn
{
    position: relative;
    top: -40px;
}
</style>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
@include('navbar')
    <!-- Navbar End -->




            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

   <div class="row">
      <div class="col-md-12">
         <div id="content" class="content content-full-width">
            <!-- begin profile -->
            <div class="profile  position-sticky z-index-1000 top-0 bg-white">
               <div class="profile-header">
                  <!-- BEGIN profile-header-cover -->
                  <div class="profile-header-cover"></div>
                  <!-- END profile-header-cover -->
                  <!-- BEGIN profile-header-content -->
                  <div class="profile-header-content">
                     <!-- BEGIN profile-header-img -->
                     <div class="input--file">
                        <form action="/update-profile" method="post" enctype="multipart/form-data" id="update-profile-form">
                        <span>@csrf
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3.2"/>
                            <path d="M9 2l-1.83 2h-3.17c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-12c0-1.1-.9-2-2-2h-3.17l-1.83-2h-6zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
                            <path d="M0 0h24v24h-24z" fill="none"/>
                          </svg>
                        </span>
                        <input name="img" type="file" />
                    </form>
                      </div>
                     <div class="profile-header-img">
                        <img src="{{ asset($teacher->profile_img) }}" alt="" class="profile-img" style="object-fit: cover;">

                    </div>

                     <!-- END profile-header-img -->
                     <!-- BEGIN profile-header-info -->
                     <div class="profile-header-info">
                        <h4 class="m-t-0 m-b-3">{{$teacher->name}}</h4>
                        <p class="m-b-4" id="email">{{$teacher->email}}</p>

                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" id="view-profile">
                           View Profile
                          </button>
                          &nbsp; &nbsp; &nbsp; &nbsp;
                          @if($teacher->status == 'not approved')

                          <button type="button" class="btn btn-danger btn-sm status-btn" id="status2">
                            {{$teacher->status}}
                             </button>

                          @else
                          <button type="button" class="btn btn-primary btn-sm status-btn" id="status1">
                            {{$teacher->status}}
                          </button>
                          @endif

                          <div class="row float-end" id="logout-btn">
                            <a href="{{route('user-logout')}}" style="color:white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                              </svg>
                            </a>


                          </div>
                     </div>
                     <!-- END profile-header-info -->
                  </div>
                  <!-- END profile-header-content -->
                  <!-- BEGIN profile-header-tab -->


                  <!-- END profile-header-tab -->
               </div>

            </div>
            <!-- end profile -->
            <!-- begin profile-content -->
@if($teacher->status == 'not approved')
<div class="profile-content z-index-10 content-full-width" style="height: 70vh;">
    <div class="alert alert-primary d-flex justify-content-center align-items-center" style="font-size: 32px;">Wait for approval</div>
    <div class="bookshelf_wrapper">
        <ul class="books_list">
          <li class="book_item first"></li>
          <li class="book_item second"></li>
          <li class="book_item third"></li>
          <li class="book_item fourth"></li>
          <li class="book_item fifth"></li>
          <li class="book_item sixth"></li>
        </ul>
        <div class="shelf"></div>
      </div>

</div>

@else

            <div class="profile-content z-index-10 content-full-width">
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  <!-- begin #profile-post tab -->
                  <div class="tab-pane fade active show" id="profile-post">
                     <!-- begin timeline -->
                     <ul class="timeline">
                        @if(count($student)>0)

                        @foreach($student as $student)
                        <li>
                           <!-- begin timeline-time -->
                           <div class="timeline-time">
                              <span class="date">Payment</span>
                              <span class="time"><i class="fas fa-rupee-sign"></i>{{$student->fee}}</span>
                           </div>
                           <!-- end timeline-time -->
                           <!-- begin timeline-icon -->
                           <div class="timeline-icon">
                              <a href="javascript:;">&nbsp;</a>
                           </div>
                           <!-- end timeline-icon -->
                           <!-- begin timeline-body -->
                           <div class="timeline-body">
                              <div class="timeline-header">
                                @if($student->profile_img)
                                 <span class="userimage"><img src="{{asset($student->profile_img)}}" alt=""></span>
                                 @else
                                 <span class="userimage"><img src="{{asset('extenalimges/student.png')}}" alt=""></span>
                                 @endif
                                 <span class="username"><a href="javascript:;">{{$student->student_id}}</a> <small></small></span>
                                 <span class="pull-right text-muted">{{$student->Board}}</span>
                              </div>
                              <div class="timeline-content" style="overflow: hidden;">
                                 <p>
                                    <h6>{{$student->gender}}:Tutor Required</h6>

                                    <h6>Address:{{ str_replace(substr($student->address, 5), str_repeat('*', strlen(substr($student->address, 5))), $student->address) }}</h6>

                                    <h6>Contact Number :{{ str_replace(substr($student->Contact_number, 3), str_repeat('*', strlen(substr($student->Contact_number, 3))), $student->Contact_number) }}</h6>

                                    <h6> Class: {{$student->Class}}</h6>

                                    <h6> Subject: {{$student->Subject}}</h6>

                                    <h6> Board: {{$student->Board}}</h6>

                                    <h6> Duration: {{$student->duration}}</h6>


                                 </p>
                              </div>
                              <div class="timeline-likes">
                               <div class="btn btn-primary btn-sm" id="notification" data-teacher_id={{session('user_id')}} data-subject={{$student->Subject}} data-student_id={{$student->student_id}}>get more detail</div>


                              </div>


                           </div>
                           <!-- end timeline-body -->
                        </li>
                        @endforeach
@else
                        <li><h1><div class="alert alert-danger"> No Students Found  Your Area</div></h1> </li>
@endif



                     </ul>
                     <!-- end timeline -->
                  </div>
                  <!-- end #profile-post tab -->
               </div>
               <!-- end tab-content -->
            </div>
            @endif
            <!-- end profile-content -->
         </div>
      </div>
   </div>
</div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- Login End -->

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
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">View Profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body-lg">
                <br>
                <div class="container">
                    <form  id="update-teacher-form" enctype="multipart/form-data">
                      <input type="hidden" name="Teacher_id" value="{{$teacher->Teacher_id}}">
                        <div class="row">
                          <div class="col-md-4 mb-4">


                                <input type="text" class="form-control form-control-lg" placeholder="Teacher Name"
                                name="name" style="border-radius: 10px;" value="{{$teacher->name}}" readonly>



                          </div>
                          <div class="col-md-4 mb-4">

                            <input placeholder="Email" type="email" class="form-control form-control-lg"
                                name="email" id="exampleFormControlImail" style="border-radius: 10px;" value="{{$teacher->email}}" readonly>


                          </div>
                          <div class="col-md-4 mb-4">


                            <input data-placeholder="DOB" type="date" class="form-control form-control-lg"
                            name="Dob" id="exampleFormControlInput1" style="border-radius: 10px;" value="{{$teacher->Dob}}" readonly>



                      </div>
                        </div>
                    <div class="row">
                          <div class="col-md-4 mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="fee" name="fee" style="border-radius: 10px;" value="{{$teacher->expected_monthly_tuition_fee}}" readonly>
                        </div>

                          <div class="col-md-4 mb-4">
                            <input type="number" class="form-control form-control-lg" placeholder="WhatsApp Number"
                            name="WhatsApp_number" style="border-radius: 10px;" value="{{$teacher->whatsapp_number}}"  readonly>
                        </div>
                        <div class="col-md-4 mb-4">
                            <input type="number" class="form-control form-control-lg" placeholder="Adhaar Number"
                            name="Adhaar_number" style="border-radius: 10px;" value="{{$teacher->adhaar_number}}" readonly>
                        </div>
</div>
<div class="row">
                          <div class="col-md-4 mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Present Address"
                            name="presentaddress" style="border-radius: 10px;" value="{{$teacher->present_address}}" readonly>

                          </div>
                          <div class="col-md-4 mb-4">
                            <input type="text" class="form-control form-control-lg"
                            placeholder="Permanent Address" name="permanentaddress" style="border-radius: 10px;" value="{{$teacher->permanent_address}}" readonly>

                        </div>
                        <div class="col-md-4 mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Tuition Name"
                                name="tuitionname" style="border-radius: 10px;" value="{{$teacher->tuition_name}}" readonly>
                        </div>
</div>
<div class="row">
    @csrf

                          <div class="col-md-4 mb-4">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Teaching Experience" name="teachingexp" style="border-radius: 10px;" value="{{$teacher->teaching_experience}}" readonly>
                          </div>
                          <div class="col-md-4 mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Qualification"
                            name="qualification" style="border-radius: 10px;" value="{{$teacher->qualification}}" readonly>

                        </div>
                        <div class="col-md-4 mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Major Subect"
                            name="major" style="border-radius: 10px;" value="{{$teacher->major_subject}}" readonly>
                        </div>
</div>
<div class="row">
                          <div class="col-md-4 mb-4">
                            <input type="text" class="form-control form-control-lg"
                            placeholder="Subject/class which you can teach" name="subject" style="border-radius: 10px;" value="{{$teacher->subject_can_teach}}" readonly>

                          </div>
                          <div class="col-md-4 mb-4">

                            <input type="text" class="form-control form-control-lg" placeholder="Board Name"
                                name="board" style="border-radius: 10px;" value="{{$teacher->board_name}}" readonly>
                          </div>
                          <div class="col-md-4 mb-4">
                            <select name="gender" class="form-select" style="border-radius: 10px;"id="gender" readonly>
                                <option value="male" style="border-radius: 10px;">Male</option>
                                <option value="female" style="border-radius: 10px;">Female</option>
                            </select>
                        </div>
</div>
<div class="row">
                          <div class="col-md-4 mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="phone number"
                                name="Contact_number" style="border-radius: 10px;" value="{{$teacher->phone_number}}" readonly>
                          </div>
</div>
                  {{-- <div class="row" style="margin-right:19px;">
                          <div class="col-md-3 mb-3">
                            <input type="file" id="upload"  name="profile_pic" accept="image/*" hidden/>
                            <label for="upload">Update Profile </label>
                          </div>
                          <div class="col-md-3 mb-3" style="margin-right:5px;">
                            <div class="input-group">
                                <input type="file" id="upload"  name="Adhaar_image" accept="image/*" hidden/>
                                <label for="upload">Update Adhaar </label>
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="file" id="upload" hidden  accept="image/*" name="Degree_image"/>
                            <label for="upload">Update Degree </label>
                          </div>
</div> --}}
{{-- <div class="row">

    <div class="col-md-3 mb-3">
        <input type="file" id="upload_profile_pic" hidden name="profile_pic" accept="image/*"/>
        <label for="upload_profile_pic">Update Profile </label>
    </div>
    <div class="col-md-3 mb-3" style="margin-right:5px;">
        <input type="file" id="upload_adhaar_image" hidden name="Adhaar_image" accept="image/*"/>
        <label for="upload_adhaar_image">Update Adhaar </label>
    </div>
    <div class="col-md-3 mb-3">
        <input type="file" id="upload_degree_image" hidden name="Degree_image" accept="image/*"/>
        <label for="upload_degree_image">Update Degree </label>
    </div>
</div> --}}

</div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      <script>
         const form = document.querySelector('#update-profile-form');
const fileInput = document.querySelector('input[type="file"]');

fileInput.addEventListener('change', () => {
  form.submit();
  $('#update-profile-form').submit();
});
        $('#notification').on('click', function() {
    var teacherId = $(this).data('teacher_id');
    var subject = $(this).data('subject');
    var studentId = $(this).data('student_id');
$(this).prop('disabled', true);
$(this).html('Sending....');
var btn = $(this);
    $.ajax({
        type: 'GET',
        url: '{{ route('notification') }}',
        data: {
            teacher_id: teacherId,
            subject: subject,
            student_id: studentId
        },
        success: function(response) {
            if (response.success) {
                btn.html('get more detail');
                toastr.success('Notification Sent Successfully');
                console.log(response.success);
            } else {
                toastr.error('Notification Failed');
                console.log(response.error);
            }
        },
        error: function(error) {
            btn.html('sent !');
            toastr.error(error.responseJSON.error);
            console.log(error);
        },

    });
});
      </script>
      <script>
$('document').ready(function(){
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
    $('#gender').val("{{$teacher->gender}}");



            $('#update-teacher-form').submit(function (e) {
                e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{route('update_teacher')}}',
                data: $('#update-teacher-form').serialize(),
                success: function (data) {
                    toastr.success(data.success);
                },
                error: function (error) {
                        console.log(error);
                        $('#alert-success').hide();
                        var Showerror = document.getElementById("error-message");
                        Showerror.style.display = "block";
                        Showerror.innerHTML = '';

                        var errors = error.responseJSON.errors;


                        }
                        });
            });
        });


      </script>
      @if (session()->has('success'))
        <script>
              toastr.success('{{ session('success') }}');
            </script>
        @endif
        @if (session()->has('error'))
            <script>
                toastr.error('{{ session('error') }}');
</script>
@endif
    <!-- Ajax Form Script -->
    {{-- <script type="text/javascript">
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

            var form = document.getElementById("loginForm");
            form.addEventListener("submit", function (event) {
                event.preventDefault();

                var formdata = new FormData(form);
                $.ajax({
                    type: 'POST',
                    url: "{{route('login-user')}}",
                    data: formdata,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        var Showerror = document.getElementById("error-message");
                        Showerror.style.display = "none";
                        $('#alert-success').show();
                        $('#alert-success').text(data.success);
                        toastr.success('Login Successfully');
                    },
                    error: function (error) {
                        console.log(error);
                        $('#alert-success').hide();
                        var Showerror = document.getElementById("error-message");
                        Showerror.style.display = "block";
                        Showerror.innerHTML = '';

                        var errors = error.responseJSON.errors;

                        $.each(errors, (key, value) => {
                            Showerror.innerHTML += value + '<br>';
                        });
                        if(error.responseJSON.error)
                        {
 Showerror.innerHTML = error.responseJSON.error;
                        }
                        if(error.responseJSON.error.message)
                        {
                            Showerror.innerHTML = error.responseJSON.error.message;
                        }
                        toastr.error('Something Went Wrong !');
                    }
                });
            });
        });

        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const togglePasswordIcon = document.getElementById('togglePasswordIcon');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            togglePasswordIcon.classList.toggle('fa-eye-slash');
        }
    </script> --}}
</body>

</html>
