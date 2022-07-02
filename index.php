<?php
include "main.php";

checkLoggedIn();

$data = array();
$data['title'] = 'Dashboard';
$data['userData'] = $_SESSION['user_data'];
includeView('includes/header.dashboard.php', $data);
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">today</i>
                    </div>
                    <div class="content">
                        <div class="text"><?=day_indo(date('Y-m-d'));?></div>
                        <div class="number"><?=date('d')?><span class="font-16"> <?=long_bulan(date('n'));?></span></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">view_quilt</i>
                    </div>
                    <div class="content">
                        <div class="text">PRODUK</div>
                        <div class="number count-to" data-from="0" data-to="100" data-speed="2000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">supervisor_account</i>
                    </div>
                    <div class="content">
                        <div class="text">PENGGUNA</div>
                        <div class="number count-to" data-from="0" data-to="100" data-speed="2000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">confirmation_number</i>
                    </div>
                    <div class="content">
                        <div class="text">PROMO</div>
                        <div class="number count-to" data-from="0" data-to="100" data-speed="2000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header bg-purple">
                        <h2>Selamat Datang <?=$data['userData']->u_name;?></h2>
                    </div>
                </div>
            </div>

        </div>



    </div>
</section>
<?php
includeView('includes/footer.dashboard.php', $data);
