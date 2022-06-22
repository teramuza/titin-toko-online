<?php
include "main.php";

checkLoggedIn();

echo Json_encode($_SESSION['user_data']);

?>
<p>Hello <?=$_SESSION['user_data']->u_name;?></p>