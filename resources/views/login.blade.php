
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Login | UNO Bank</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="..vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css//bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="../vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css/owl.carousel.css">
		<link rel="stylesheet" href="../vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css/owl.transitions.css">
       <!-- Animate css -->
        <link rel="stylesheet" href="../vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="../vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css/meanmenu.min.css">
        <!-- Nice-select css -->
        <link rel="stylesheet" href="../vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css/nice-select.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="../vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css/font-awesome.min.css">
		<link rel="stylesheet" href="../vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css/themify-icons.css">
		<link rel="stylesheet" href="../vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css/flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="../vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css/magnific.min.css">
		<!-- style css -->
        <style>
             
        </style>
		<!-- responsive css -->
		<link rel="stylesheet" href="../vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/css/responsive.css">

		<!-- modernizr css -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>

		
		
        <!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Login</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- Start Slider Area -->
        <div class="login-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="login-page">
                            <div class="login-image">
                                <div class="log-inner">
                                    <img src="img/about/log.jpg" alt="">
                                </div>
                            </div>
                            <div class="login-form">
                                <h4 class="login-title">LOGIN</h4>
                                <div class="row">
                                    <form method="post" id="loginForm" action="usercontoller" >
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" id="name" name="username" class="form-control" placeholder="Username"  data-error="Please enter your Username">
                                        </div>
                                        @csrf
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="password" id="msg_subject"  name="passw        ord" class="form-control" placeholder="Password" data-error="Please enter your Password">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="check-group flexbox">
                                                <label class="check-box">
                                                    <input type="checkbox" class="check-box-input">
                                                    <span class="remember-text">Remember me</span>
                                                </label>

                                                <a class="text-muted" href="forgot_password">Forgot password?</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
											<input type="hidden" name="loginform" value="true">
                                            <button type="submit" id="submit" class="slide-btn login-btn submitbotton">Login</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="clear"></div>
                                            <div class="sign-icon">
                                                <div class="acc-not">Don't have an account  <a href="signup.php"> Sign up</a></div>
                                            </div> 
                                        </div> 
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
		<!-- all js here -->
        <!-- Start Footer Area -->
        <!-- End Footer Area -->
		
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		  <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- Counter js -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="js/waypoints.js"></script>
        <!-- Nice-select js -->
        <script src="js/jquery.nice-select.min.js"></script>
		<!-- magnific js -->
        <script src="js/magnific.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- meanmenu js -->
        <script src="../jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
		<!-- toast plugin -->
		<!-- <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script> -->
        <link href="css/jquery.toast.min.css" rel="stylesheet"> 
        <script src="../js/jquery.toast.min.js"></script>
    	<!-- <script src="includes/main.js"></script> -->
      <!--   <script src="includes/main.js"></script> -->

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js"> -->
	</body>
</html>