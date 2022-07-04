<?php
include "main.php";

checkLoggedIn();

if (isset($_GET['table'])) {
    $url = getModelWithQuery('table='.$_GET['table'].'&id='.$_GET['id'], 'delete');
    $json = file_get_contents($url);
    $response = json_decode($json);

    if ($response->status == 200) {
        redirect(base_url($_GET['table'].'.php'));
    }
}