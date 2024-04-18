<?php
include '../controller/user_controller.php';

$register = new UserController();
$result = $register->getall();
echo json_encode($result);
?>