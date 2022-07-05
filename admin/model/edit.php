<?php
include "../constants/direct_access.php";
require_once('classes.php');

if (isset($_POST['edit_category'])) {
    unset($_POST['edit_category']);
    $object = (object)$_POST;
    unset($_POST);
    echo Categories::updateCategories($object);
}

if (isset($_POST['edit_product'])) {
    unset($_POST['edit_product']);
    $object = (object)$_POST;
    unset($_POST);
    echo Products::updateProducts($object);
}

if (isset($_POST['edit_promo'])) {
    unset($_POST['edit_promo']);
    $object = (object)$_POST;
    unset($_POST);
    echo Promo::updatePromo($object);
}
