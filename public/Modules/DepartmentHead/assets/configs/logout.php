<?php
session_start();
unset($_SESSION['dept_id']);
session_destroy();
header('Location:../../dept_head_login.php');
?>
