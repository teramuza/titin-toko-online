<?php
include "constants/direct_access.php";
include "config/config.example.php";

session_start();

function base_url($path = null) {
    global $SERVER_CONFIG;
    $base_url = ($SERVER_CONFIG['USING_SSL']) ? 'https': 'http';
    $base_url .= "://".$_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

    if (isset($path)) return $base_url.$path;
    return $base_url;
}

function isLoggedin() {
    if(!empty($_SESSION)){
        if ($_SESSION['is_loggedin']) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function redirect($url, $statusCode = 303){
    header('Location: ' . $url, true, $statusCode);
    die();
}

function logout() {
    $_SESSION = array();
    session_destroy();
    redirect(base_url('login.php'));
}

function checkLoggedIn() {
    if (!isLoggedin()) {
        logout();
    }
}

$model_url = base_url('model/');
