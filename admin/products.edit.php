<?php
include('main.php');

checkLoggedIn();
$url = getModelWithQuery('table=products&id='.$_GET['id']);
$json = file_get_contents($url);
$obj = json_decode($json);

$url = getModelWithQuery('table=categories');
$json = file_get_contents($url);
$arr = json_decode($json);

if (isset($_POST['edit_product'])) {
    $curl = curl_init(getModel('edit'));
    $_POST['id'] = $_GET['id'];
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($_POST));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    if ($response) {
        redirect(base_url('products.php'));
    } else {
        echo '<script language="javascript">';
        echo 'alert("Update data gagal")';
        echo '</script>';
    }
}

$data['title'] = 'Update Product';
$data['userData'] = $_SESSION['user_data'];
includeView('includes/header.dashboard.php', $data);

?>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Update Produk</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="" >
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <p style="color: #aaa">Nama Produk</p>
                                        <input type="text" class="form-control" name="name" value="<?=@$obj->p_nama;?>" required>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="satuan" value="<?=@$obj->p_satuan;?>" required>
                                        <label class="form-label">Satuan</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="harga" value="<?=@$obj->p_harga;?>" required>
                                        <label class="form-label">Harga</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <p style="color: #aaa">Kategori Produk</p>
                                    <select class="col-sm-6" class="form-control show-tick" name="kp_kode" required>
                                        <option value="">-- Pilih Kategori --</option>
                                        <?php foreach ($arr as $item): ?>
                                            <option value="<?=$item->id;?>"><?=$item->kp_nama;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button class="btn btn-primary waves-effect" name="edit_product" type="submit">SIMPAN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
includeView('includes/footer.dashboard.php', $data);
?>