<?php 
 //   if($this->session->userdata('username') != NULL){
?>
<!doctype html>
<html class="no-js" lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
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
    <!-- data-table CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/normalize.css">
    <!-- charts C3 CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/c3.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/form/all-type-forms.css">
    <!-- switcher CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/switcher/color-switcher.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/style.css">
    <!-- buttons CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/buttons.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Color Css Files
        ============================================ -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-one.css" title="color-one" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-two.css" title="color-two" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-three.css" title="color-three" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-four.css" title="color-four" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-five.css" title="color-five" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-six.css" title="color-six" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-seven.css" title="color-seven" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-eight.css" title="color-eight" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-nine.css" title="color-nine" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>horizontal/css/switcher/color-ten.css" title="color-ten" media="screen" />

    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/summernote.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/data-table/bootstrap-editable.css">

    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/dropzone.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/c3.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>horizontal/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- form CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>horizontal/css/form.css">
    
    
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url(); ?>horizontal/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <!--       <div class="admin-logo">
                        <a href="<?php echo base_url(); ?>horizontal/#"><img src="<?php echo base_url(); ?>horizontal/img/logo/log.png" alt="" />
                        </a>
                    </div>-->
                </div>
                <div class="col-lg-5 col-md-5 col-sm-0 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav mai-top-nav">
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            
                            <li class="nav-item"><a href="<?php echo base_url(); ?>horizontal/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                    <div class="notification-single-top">
                                        <h1>Notifications</h1>
                                    </div>
                                    <ul class="notification-menu">
                                        <li>
                                            <a href="<?php echo base_url(); ?>horizontal/#">
                                                <div class="notification-icon">
                                                    <span class="adminpro-icon adminpro-checked-pro"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <span class="notification-date">16 Sept</span>
                                                    <h2>Advanda Cro</h2>
                                                    <p>Please done this project as soon possible.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>horizontal/#">
                                                <div class="notification-icon">
                                                    <span class="adminpro-icon adminpro-cloud-computing-down"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <span class="notification-date">16 Sept</span>
                                                    <h2>Sulaiman din</h2>
                                                    <p>Please done this project as soon possible.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>horizontal/#">
                                                <div class="notification-icon">
                                                    <span class="adminpro-icon adminpro-shield"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <span class="notification-date">16 Sept</span>
                                                    <h2>Victor Jara</h2>
                                                    <p>Please done this project as soon possible.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>horizontal/#">
                                                <div class="notification-icon">
                                                    <span class="adminpro-icon adminpro-analytics-arrow"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <span class="notification-date">16 Sept</span>
                                                    <h2>Victor Jara</h2>
                                                    <p>Please done this project as soon possible.</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="notification-view">
                                        <a href="<?php echo base_url(); ?>horizontal/#">View All Notification</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>horizontal/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                <!--    <?php 
                                    $no = 1;
                                   
                                    foreach($query->result() as $row){
                                        echo"
                                    <span class='admin-name'>".$row->nama."</span>";
                                    }  
                                     ?> -->
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                    <li><a href="<?php echo base_url(); ?>horizontal/#"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>My Account</a>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>horizontal/#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                    </li>
                            <!--        <li><a href="<?php echo base_url(); ?>horizontal/#"><span class="adminpro-icon adminpro-money author-log-ic"></span>User Billing</a>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>horizontal/#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                    </li>-->
                                    <li><a href="<?php echo base_url(); ?>login/logout"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                    </li>
                                </ul>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top area end-->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>BERITA ONLINE</h2>
                    <ul class="nav nav-tabs custom-menu-wrap">
                        <li  ><a  href="<?php echo base_url(); ?>welcome/index" >Home</a></li>
                     <!--  <li class="nav-item dropdown" ><a  href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Kategori<span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                        <div role="menu" class="dropdown-menu animated flipInX"><?php
                                                    $query = $this->m_kategori->tampil_home();
                                                    foreach($query->result() as $row){
                                                        echo "
                                                        <a href='".base_url('tambahKategori/tampilKategori?id='.$row->idKategori)."' class='dropdown-item'>".$row->namaKategori."</a>
                                                         ";  
                                     }
                                     ?>
                                 </div>
                        </li>-->
                       <li class="nav-item dropdown" ><a  href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Tambah Berita<span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                            <div role="menu" class="dropdown-menu animated flipInX">
                             <!--      <a href="<?php echo base_url(); ?>tambahKategori/index" class="dropdown-item">TambahKategori</a>--> 
                                    <a href="<?php echo base_url(); ?>tambahBerita/index" class="dropdown-item">Tambah Berita</a>
                                    
                                </div>
                        </li>
                        <!-- <li class="nav-item dropdown" ><a  href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Postingan<span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                            <div role="menu" class="dropdown-menu animated flipInX">
                                    <a href="<?php echo base_url(); ?>postingan/index" class="dropdown-item">Kategori</a>
                                  <a href="<?php echo base_url(); ?>postingan/index2" class="dropdown-item">Berita</a>
                                    
                                </div>
                        </li>-->
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>

<?php 
  //  }
  //  else redirect(base_url('login'));

    
?>