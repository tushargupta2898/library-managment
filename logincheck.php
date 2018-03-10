<?php
include('connection.php');
session_start();
$login_type=$_POST['login'];
$aemail=$_POST['email'];
$apass=$_POST['password'];


if($login_type == 1)
{
	$qry="select * from admin_table where a_email = '$aemail' and a_password='$apass'";
	$res=mysql_query($qry);
	$num=mysql_num_rows($res);
	if($num>0)
	{
	$row=mysql_fetch_array($qry);
	$_SESSION['a_id'] = $row['uid'];	
	header('location:adminpage.php');
	}
	else
	{
	header('location:templet.php?err=4');
	}
}
else
{
	$qry="select * from signup_table where s_email = '$aemail' and s_password='$apass'";
	mysql_query($qry);
	$num=mysql_num_rows($res);
	if($num>0)
	{
	$row=mysql_fetch_array($qry);
	$_SESSION['s_id'] = $row['uid'];
	header('location:userpage.php');
    }
	else
	{
	header('location:templet.php?err=4');
	}
}


?>