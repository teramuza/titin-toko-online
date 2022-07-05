<?php
include('main.php');

checkLoggedIn();

if (isset($_POST['add_category'])) {
    $curl = curl_init(getModel('add'));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($_POST));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    if ($response) {
        redirect(base_url('categories.php'));
    } else {
        echo '<script language="javascript">';
        echo 'alert("Input data gagal")';
        echo '</script>';
    }
}

$data['title'] = 'Tambah Kategori';
$data['userData'] = $_SESSION['user_data'];
includeView('includes/header.dashboard.php', $data);

?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Tambah Kategori Produk</h2>
                    </div>
                    <div class="body">
                        <form id="form_validation" method="POST" action="" >
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <p style="color: #aaa">Nama Kategori</p>
                                    <input type="text" class="form-control" name="name" value="<?=@$_POST['name'];?>" required>
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect" name="add_category" type="submit">SIMPAN</button>
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