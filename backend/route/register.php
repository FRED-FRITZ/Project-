<?php
include '../controller/user_controller.php';

$register = new UserController();
echo $register->registered($_POST);
?>