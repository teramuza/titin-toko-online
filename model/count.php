<?php
include "../constants/direct_access.php";
require_once ('classes.php');

function countData($table) {
    switch ($table) {
        case 'categories':
            return Categories::countData();
            break;
        case 'products':
            return Products::countData();
            break;
        case 'users':
            return User::countData();
            break;
        default:
            break;
    }
}

if(isset($_GET['table'])) {
    header('Content-Type: application/json');
    echo json_encode(countData($_GET['table']));
}