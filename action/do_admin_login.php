<?php
session_start();
require('connection.php');
if(isset($_REQUEST['action']) && $_REQUEST['action']=='Do_login_mob'){
    // echo $_POST['email'];
    // echo $_POST['password'];
    // die;
	$sel="select * from tbl_admin where admin_email='".$_POST['email']."' and admin_password='".$_POST['password']."'";
    $result=mysqli_query($conn, $sel);


	if(mysqli_num_rows($result) > 0)
	{
		$row=mysqli_fetch_array($result);
		
// 		connectArray ( [0] => 1 [admin_id] => 1 [1] => admin@gmail.com [admin_email] => admin@gmail.com [2] => admin@123 [admin_password] => admin@123 [3] => [admin_status] => )
		
// 		$row['admin_email'];
	
	  $_SESSION['email']=$row['admin_email'];
// 		die;
		
		echo "<script>window.location.href='../home.php'</script>";
		die;
	}
	else 
	{
		echo "<script>window.location.href='../index.php?msg=invalid'</script>";
		die;
	}
}	else 
	{
		echo "<script>window.location.href='../index.php?msg=invalid-out'</script>";
		die;
	}
?>