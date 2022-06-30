<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?=$title;?> | G99Byul</title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url('assets/favicon.ico');?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url('assets/plugins/bootstrap/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url('assets/plugins/node-waves/waves.css');?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url('assets/plugins/animate-css/animate.css');?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?=base_url('assets/plugins/morrisjs/morris.css');?>" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?=base_url('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css');?>" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="<?=base_url('assets/plugins/bootstrap-select/css/bootstrap-select.css');?>" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?=base_url('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css');?>" rel="stylesheet" />

    <!-- Bootstrap Tagsinput Css -->
    <link href="<?=base_url('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css');?>" rel="stylesheet">

    <!-- Sweetalert Css -->
    <link href="<?=base_url('assets/plugins/sweetalert/sweetalert.css');?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url('assets/css/themes/all-themes.css');?>" rel="stylesheet" />
</head>

<body class="theme-deep-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-teal">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?=base_url();?>">Panel Dashboard<strong> G99Byul</strong></a>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?=base_url('assets/images/user.png');?>" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?=$userData->u_name.' &nbsp; ';
                    if($userData->u_profile == 'A'){
                        echo '<span class="label label-primary">Admin</span>';
                    } if($userData->u_profile == 'M') {
                        echo '<span class="label label-success">Member</span>';
                    } ?></div>
                <div class="email"><?=$userData->u_email;?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?=base_url('account');?>"><i class="material-icons">person</i>Akun Profil</a></li>
                        <li><a href="<?=base_url('account/password');?>"><i class="material-icons">security</i>Ubah Sandi</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="<?=base_url('account/logout');?>"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                </li>
                <li>
                    <a href="<?=base_url();?>">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('articles');?>">
                        <i class="material-icons">library_books</i>
                        <span>Artikel</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('events');?>">
                        <i class="material-icons">event</i>
                        <span>Event</span>
                    </a>
                </li>
                <?php if($session_user['level'] != 2){ ?>
                    <li>
                        <a href="<?=base_url('gallery');?>">
                            <i class="material-icons">photo_library</i>
                            <span>Galery</span>
                        </a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="<?=base_url('gallery/jurusan');?>">
                            <i class="material-icons">photo_library</i>
                            <span>Galery Jurusan</span>
                        </a>
                    </li>
                <?php } if($session_user['level'] == 0){ ?>
                    <li>
                        <a href="<?=base_url('users');?>">
                            <i class="material-icons">supervisor_account</i>
                            <span>Pengguna</span>
                        </a>
                    </li>
                <?php } ?>
                <li>
                    <a href="<?=base_url('account/logout');?>">
                        <i class="material-icons">input</i>
                        <span>Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->

        <!-- Copyright -->
        <div class="legal">
            <div class="copyright">
                &copy; <?php if(date('Y') > 2022){echo '2022 - '.date('Y');}else{ echo '2022';} ?> <a target="blank" href="#">d<strong>Panel</strong> - TeraLab</a>.
            </div>
            <div class="version">
                <b>Version: </b> 2.1.1
            </div>
        </div>
        <!-- #Copyright -->

    </aside>
    <!-- #END# Left Sidebar -->

</section>