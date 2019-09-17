<?php
function check_login()
{
if(strlen($_SESSION['dept_id'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="dept_head_login.php";		
		$_SESSION["dept_id"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>