<?php
include "main.php";

checkLoggedIn();
$url = getModelWithQuery('table=categories');
$json = file_get_contents($url);
$arr = json_decode($json);

$data['title'] = 'Manage Kategori';
$data['userData'] = $_SESSION['user_data'];
$data['custom_js'] = 'js/pages/tables/jquery-datatable-categories.js';
includeView('includes/header.dashboard.php', $data);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Manage Kategori Produk</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="<?=base_url('categories.add.php');?>" class="btn bg-purple btn-xs waves-effect">
                                    <i class="material-icons">add_circle</i><span>Buat Kategori</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
                                    <th width="70">Aksi</th>
                                </tr>
                                </thead>
                                <?php if (!empty($arr)): ?>
                                <tbody>
                                <?php foreach($arr as $data): ?>
                                    <tr>
                                        <td><?=$data->id;?></td>
                                        <td><?=$data->kp_nama;?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Menu <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu action-tools">
                                                    <li><a href="<?=base_url('categories.update.php').'?id='.$data->id;?>" class=" waves-effect waves-block">Update</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="<?=base_url('categories.delete.php').'?id='.$data->id;?>" class=" waves-effect waves-block">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
includeView('includes/footer.dashboard.php', $data);
?>