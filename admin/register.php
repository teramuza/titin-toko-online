<?php
include "main.php";

if(isLoggedin() === true) {
    redirect(base_url());
}

if (isset($_POST['register'])) {
    $curl = curl_init(getModel('auth'));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($_POST));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    if ($response) {
        redirect(base_url('login.php'));
    } else {
        $message = "Register gagal";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Register - G99Byul</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url('assets/plugins/bootstrap/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url('assets/plugins/node-waves/waves.css');?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url('assets/plugins/animate-css/animate.css');?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet">
</head>
<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Register <b>G99Byul</b></a>
        <small>Aplikasi Jual Beli Merchandise</small>
    </div>
    <div class="card">
        <div class="body">
            <?php
            if(!empty(@$message)){ ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <?=@$message;?>
                </div>
            <?php } ?>
            <form action="" id="sign_in" method="POST">
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?=@$_POST['name'];?>" required <?php if(count($_POST)){ echo '';}else{ echo 'autofocus'; }?>>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?=@$_POST['email'];?>" required <?php if(count($_POST)){ echo '';}else{ echo 'autofocus'; }?>>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required <?php if(count($_POST)){ echo '';}else{ echo 'autofocus'; }?>>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                    </div>
                </div>

                <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit" name="register">DAFTAR</button>

                <div class="m-t-25 m-b--5 align-center">
                    <a href="<?=base_url('login.php'); ?>">Sudah punya akun?</a>
                </div>

            </form>
    </div>
</div>
</div>
<!--<script type="text/javascript">
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>-->
<!-- Jquery Core Js -->
<script src="<?=base_url('assets/plugins/jquery/jquery.min.js');?>"></script>

<!-- Bootstrap Core Js -->
<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.js');?>"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?=base_url('assets/plugins/node-waves/waves.js');?>"></script>

<!-- Validation Plugin Js -->
<script src="<?=base_url('assets/plugins/jquery-validation/jquery.validate.js');?>"></script>

<!-- Custom Js -->
<script src="<?=base_url('assets/js/admin.js');?>"></script>
<script src="<?=base_url('assets/js/login.js');?>"></script>
</body>

</html>
