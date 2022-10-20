<!DOCTYPE html>
<html lang="en" class="loading">

<!-- Mirrored from pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/demo-3/login-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 15:38:02 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Convex bootstrap 4 admin dashboard template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../app-assets/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="../app-assets/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="../app-assets/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="../app-assets/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
</head>

<body data-col="1-column" class=" 1-column  blank-page blank-page">

    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <section id="regestration">
                        <div class="container-fluid">
                            <div class="row full-height-vh">
                                <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
                                    <div class="card px-4 py-2 box-shadow-2">
                                        <div class="card-header text-center">
                                            <img src="../app-assets/img/logos/logo-color-big.png" alt="company-logo" class="mb-3" width="80">
                                            <h4 class="text-uppercase text-bold-400 grey darken-1">Signup</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-block mx-auto">
                                                <form action="{{ route('register') }}" method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <div class="form-group">
                                                        <div>
                                                            <input type="hidden" name="id" value='{{isset($student->id)? $student->id:""}}'>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control form-control-lg" name="first_name" id="fname" placeholder="First Name" value='{{isset($student->contact)? $student->contact:""}}'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control form-control-lg" name="last_name" id="lname" placeholder="Last Name" value='{{isset($student->contact)? $student->contact:""}}'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="email" class="form-control form-control-lg" name="email" id="inputEmail" placeholder="Email" value='{{isset($student->contact)? $student->contact:""}}'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="password" class="form-control form-control-lg" name="password" id="inputPass" placeholder="Password" value='{{isset($student->contact)? $student->contact:""}}'>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-offset-1">
                                                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                            <input type="checkbox" class="custom-control-input" checked id="terms">
                                                            <a href="" class="custom-control-label pl-2" for="terms">I agree <a>terms and conditions</a></a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button type="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0" value='{{isset($student->id)? "Edit":"Register"}}'>Get Started </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
    <footer class="footer footer-static footer-light">
    <p class="clearfix text-muted text-center px-2"><span>Copyright &copy; 2018 <a href="https://1.envato.market/pixinvent_portfolio" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
</footer>

</div>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
            </div>
        </section>
        <!--Login Page Ends-->

    </div> <!-- BEGIN VENDOR JS-->
    <script src="../app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="../app-assets/vendors/js/core/popper.min.js"></script>
    <script src="../app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="../app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="../app-assets/vendors/js/prism.min.js"></script>
    <script src="../app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="../app-assets/vendors/js/screenfull.min.js"></script>
    <script src="../app-assets/vendors/js/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="../app-assets/js/app-sidebar.js"></script>
    <script src="../app-assets/js/notification-sidebar.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
</body>

<!-- Mirrored from pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/demo-3/login-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 15:38:02 GMT -->

</html>

<!-- ////////////////////////////////////////////////////////////////////////////-->





