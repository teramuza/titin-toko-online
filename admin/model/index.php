<?php
include "../constants/direct_access.php";
require_once ('classes.php');

function getTable($table) {
    switch ($table) {
        case 'categories':
            if (isset($_GET['id'])) {
                return Categories::getCategories($_GET['id']);
            } else {
                return Categories::getAllCategories();
            }
            break;
        case 'products':
            if (isset($_GET['id'])) {
                return Products::getProducts($_GET['id']);
            } else if (isset($_GET['category_id'])) {
                return Products::getProductsByCategory($_GET['category_id']);
            } else {
                return Products::getAllProducts();
            }
            break;
        case 'promo':
            if (isset($_GET['id'])) {
                return Promo::getDistrict($_GET['id']);
            } else if (isset($_GET['regency_id'])) {
                return Promo::getAllDistricts($_GET['regency_id']);
            }
            break;
        case 'customers':
            if (isset($_GET['id'])) {
//                return FaskesType::getFaskesType($_GET['id']);
            } else {
//                return FaskesType::getAllFaskesTypes();
            }
            break;
        default:
            break;
    }
}

if(isset($_GET['table'])) {
    header('Content-Type: application/json');
    echo json_encode(getTable($_GET['table']));
}