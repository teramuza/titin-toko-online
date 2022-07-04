<?php
include "../constants/direct_access.php";
require_once('classes.php');

if(isset($_GET['table'])) {
    $id = $_GET['id'];
    switch ($_GET['table']) {
        case 'categories':
            $response = Categories::deleteCategories($id);
            break;
        case 'products':
            $response = Products::deleteProducts($id);
            break;
        case 'promo':
            $response = Promo::deletePromo($id);
            break;
        default:
            $response = null;
            break;
    }
    echo json_encode($response);
}
