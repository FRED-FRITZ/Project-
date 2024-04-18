<?php
include '../controller/user_controller.php';

$login = new UserController();
echo $login->login($_POST);
?>