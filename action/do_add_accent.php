<?php
session_start();
require('connection.php');
if(isset($_REQUEST['accent'])){

	$sel="INSERT INTO `tbl_accent`(
	`eng_accent_name`,
	`chi_accent_name`,
	`rus_accent_name`, 
	`span_accent_name`, 
	`hindi_accent_name`,
	`port_accent_name`, 
	`germ_accent_name`, 
	`fren_accent_name`,  
	`turk_accent_name`) VALUES 
	
	('".$_POST['eng']."',
	'".$_POST['chi']."',
	'".$_POST['rus']."',
	'".$_POST['spa']."',
	'".$_POST['hin']."',
	'".$_POST['port']."',
	'".$_POST['ger']."',
	'".$_POST['fra']."',
	'".$_POST['tur']."'
	)";
    
    $result=mysqli_query($conn, $sel);
    
	if($result)
	{
	
    //   $_SESSION['email']=$row['admin_email'];
       echo "<script>window.location.href='../Admin_update_content_Accent.php?menu=update2&sub=profile2'</script>";
	   
	}
	else 
	{
		echo "<script>window.location.href='../Admin_update_content_Accent.php?menu=update2&sub=profile2&failed'</script>";
	
	}
}	else 
	{
		echo "<script>window.location.href='../Admin_update_content_Accent.php?menu=update2&sub=profile2&failed'</script>";
		
	}
?>