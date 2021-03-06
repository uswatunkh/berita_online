
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BERITA ONLINE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>horizontal/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="<?php echo base_url(); ?>horizontal/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/normalize.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/form.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url(); ?>horizontal/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    
   
  
    <!-- Register Start-->
    <div class="login-form-area mg-t-30 mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <form action="<?php echo base_url('register/add'); ?>" method="post" id="adminpro-register-form" class="adminpro-form">
                    <div class="col-lg-6">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                               <!--     <div class="logo">
                                        <a href="<?php echo base_url(); ?>horizontal/#"><img src="<?php echo base_url(); ?>horizontal/img/logo/logo.png" alt="" />
                                        </a>
                                    </div>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-title">
                                        <center><h1>Registration Form</h1></center>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                       <p>Full Name</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="text" name="nama" />
                                        <i class="fa fa-user login-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Username</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="text" name="username" />
                                        <i class="fa fa-user login-user"></i>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Password</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="password" name="password" />
                                        <i class="fa fa-lock login-user"></i>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Level</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                    <select  type="text" class="form-control" name="level" >
                                <option>SuperAdmin</option>
                                <option>Admin</option>
                            </select>
                                    </div>
                                </div>
                            </div>
                           
                            
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">
                                        <button onclick="location.href='<?php echo base_url();?>login'" type="submit" class="login-button login-button-rg">Log In</button>
                                        <button type="submit" class="login-button login-button-lg">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <!-- Register End-->
  
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/jquery.form.min.js"></script>
    <script src="<?php echo base_url(); ?>horizontal/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>horizontal/js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/main.js"></script>
</body>

</html>