<?php
include "../constants/direct_access.php";
require_once ('classes.php');

if(isset($_POST['add_category'])) {
    unset($_POST['add_category']);
    $object = (object) $_POST;
    echo json_encode($object);
    unset($_POST);
    echo Categories::createCategories($object);
}

if(isset($_POST['add_product'])) {
    unset($_POST['add_category']);
    $object = (object) $_POST;
    unset($_POST);
    echo Products::createProducts($object);
}

if(isset($_POST['add_promo'])) {
    unset($_POST['add_category']);
    $object = (object) $_POST;
    unset($_POST);
    echo Promo::createPromo($object);
}
