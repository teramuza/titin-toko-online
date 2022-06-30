<?php
include "main.php";
include "helpers/includeView.php";
include "helpers/date_indo.php";

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
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="content">
                        <div class="text">ARTIKEL</div>
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
                        <i class="material-icons">date_range</i>
                    </div>
                    <div class="content">
                        <div class="text">EVENT</div>
                        <div class="number count-to" data-from="0" data-to="100" data-speed="2000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <!-- Visitors -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header bg-pink">
                        <h2>Statistik Pengunjung</h2>
                    </div>
                    <div class="body bg-pink">
                        <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                             data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                             data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                             data-fill-Color="rgba(0, 188, 212, 0)">
                            <?='100,200,90,0,48,23,90,234,23,76,123,87,23,44,345'?>
                        </div>
                        <ul class="dashboard-stat-list">
                            <li>
                                HARI INI
                                <span class="pull-right"><b>100</b> <small>VIEWS</small></span>
                            </li>
                            <li>
                                KEMARIN
                                <span class="pull-right"><b>200</b> <small>VIEWS</small></span>
                            </li>
                            <li>
                                LAST WEEK
                                <span class="pull-right"><b>300</b> <small>VIEWS</small></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Visitors -->

            <!-- Last Login -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="body bg-blue-grey">
                        <div class="font-bold m-b--35">EVENT MENDATANG</div>
                        <ul class="dashboard-stat-list">
                               <li><i>Tidak ada event</i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Last Login -->
        </div>



    </div>
</section>
<?php
includeView('includes/footer.dashboard.php', $data);
