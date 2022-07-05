<?php
include "main.php";

checkLoggedIn();
$url = getModelWithQuery('table=products');
$json = file_get_contents($url);
$arr = json_decode($json);

$data['title'] = 'Manage Produk';
$data['userData'] = $_SESSION['user_data'];
$data['custom_js'] = 'js/pages/tables/jquery-datatable-products.js';
includeView('includes/header.dashboard.php', $data);
?>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Manage Produk</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="<?=base_url('products.add.php');?>" class="btn bg-purple btn-xs waves-effect">
                                        <i class="material-icons">add_circle</i><span>Buat Produk</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th>Kategori</th>
                                        <th width="70">Aksi</th>
                                    </tr>
                                    </thead>
                                    <?php if (!empty($arr)): ?>
                                    <tbody>
                                    <?php foreach($arr as $item): ?>
                                        <tr>
                                            <td><?=$item->id;?></td>
                                            <td><?=$item->p_nama;?></td>
                                            <td><?=$item->p_satuan;?></td>
                                            <td><?=$item->p_harga;?></td>
                                            <td><?=$item->p_kp_kode;?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Menu <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu action-tools">
                                                        <li><a href="<?=base_url('products.edit.php').'?id='.$item->id;?>" class=" waves-effect waves-block">Update</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="<?=base_url('delete.php').'?table=products&id='.$item->id;?>" class=" waves-effect waves-block">Hapus</a></li>
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