<?php
function check_login()
{
if(strlen($_SESSION['p_id'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="patient_login.php";		
		$_SESSION["p_id"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>