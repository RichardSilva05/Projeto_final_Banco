<?php 
include_once('config.php');
if(isset($_REQUEST['delId']) and $_REQUEST['delId']!=""){
	$db->delete('formclientes',array('id'=>$_REQUEST['delId']));
	header('location: browser_user.php?msg=rds');
	exit;
}
?>