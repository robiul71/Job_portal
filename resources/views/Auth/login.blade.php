<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
   <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab">
	<meta name="robots" content="" >
	<meta name="keywords" content="admin dashboard, admin template, analytics, bootstrap, bootstrap 5, bootstrap 5 admin template, job board admin, job portal admin, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app, frontend">
	<meta name="description" content="We proudly present Jobick, a Job Admin dashboard HTML Template, If you are hiring a job expert you would like to build a superb website for your Jobick, it's a best choice.">
	<meta property="og:title" content="Jobick : Job Admin Dashboard Bootstrap 5 Template + FrontEnd">
	<meta property="og:description" content="We proudly present Jobick, a Job Admin dashboard HTML Template, If you are hiring a job expert you would like to build a superb website for your Jobick, it's a best choice." >
	<meta property="og:image" content="https://jobick.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- PAGE TITLE HERE -->
	<title>Register/Login</title>

	<!-- Favicon icon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('backend/asset')}}/images/favicon.png">
<link href="{{asset('backend/asset')}}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{asset('backend/asset')}}/css/style.css" rel="stylesheet">
 <style>


 </style>
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
									<div class="text-center mb-3">
                                        <ul class="nav nav-pills justify-content-center mb-4">
                                            <li class=" nav-item">
                                                <a href="#company" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">Employe(Company)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#job_seeker" class="nav-link" data-bs-toggle="tab" aria-expanded="false">Job Seeker</a>
                                            </li>

                                        </ul>
									</div>
                                   <div class="tab-content">
                                    <form action=""  id="company" class="tab-pane active">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">

                                            <div class="mb-1">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <h5 class="text-center">or sign in with</h5>
                                             <div class="text-center">
                                                <a type="button" class="btn btn-facebook">Facebook <span class="btn-icon-end"><i class="fab fa-facebook-f"></i></span>
                                                </a>
                                                <a type="button" class="btn btn-google-plus">Google + <span class="btn-icon-end"><i class="fab fa-google-plus-g"></i></span>
                                                </a>
                                             </div>
                                            </div>
                                    </form>
                                   </div>

                                   <div class="tab-content">
                                    <form action=""  id="job_seeker" class="tab-pane">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" value="Password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">

                                            <div class="mb-1">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                        <h5 class="text-center">or sign in with</h5>
                                         <div class="text-center">
                                            <a type="button" class="btn btn-facebook">Facebook <span class="btn-icon-end"><i class="fab fa-facebook-f"></i></span>
                                            </a>
                                            <a type="button" class="btn btn-google-plus">Google + <span class="btn-icon-end"><i class="fab fa-google-plus-g"></i></span>
                                            </a>
                                         </div>
                                        </div>
                                    </form>
                                   </div>

                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="{{route('register') }}">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->

    <script src="{{asset('backend/asset')}}/vendor/global/global.min.js"></script>
	<script src="{{asset('backend/asset')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{asset('backend/asset')}}/js/custom.min.js"></script>
    <script src="{{asset('backend/asset')}}/js/dlabnav-init.js"></script>

</body>
</html>
