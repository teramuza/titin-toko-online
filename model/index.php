<?php
include "../constants/direct_access.php";
require_once('classes.php');

if(isset($_POST['login'])) {
    unset($_POST['login']);
    $object = (object) $_POST;
    unset($_POST);
    $response = User::login($object);
    http_response_code($response->status);
    header('Content-Type: application/json');
    echo json_encode($response);
}

if (isset($_POST['register'])) {
    unset($_POST['register']);
    $object = (object) $_POST;
    unset($_POST);
    echo User::register($object);
}