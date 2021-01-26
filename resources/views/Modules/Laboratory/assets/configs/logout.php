<?php
session_start();
unset($_SESSION['em_id']);
session_destroy();
header('Location:../../employee_login.php');
?>
