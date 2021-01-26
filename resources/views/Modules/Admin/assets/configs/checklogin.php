<?php
function check_login()
{
if(strlen($_SESSION['admin_id'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="ohcms_admin_login.php";		
		$_SESSION["admin_id"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>