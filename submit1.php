<?php
include('connection.php');
$a=$_POST['name'];
$b=$_POST['contact'];
$c=$_POST['email'];
$d=$_POST['depart'];
$e=$_POST['desig'];
$f=$_POST['salary'];
$g=basename($_FILES['image']['name']);
$qry="INSERT into user_table(u_name,u_contact,u_email,u_depart,u_desig,u_salary,u_image) values('$a','$b','$c','$d','$e','$f','$g')";
mysql_query($qry);
$u="update depart_table set d_strenght=d_strenght+1 where d_id=$d";
mysql_query($u);
$v="update desig_table set de_strenght=de_strenght+1 where de_id=$e";
mysql_query($v);
$w="update salary_table set sa_strenght=sa_strenght+1 where sa_id=$f";
mysql_query($w);
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["image"]["name"]);
if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
{
}
else
{
	echo"sorry,there was an error uploading your file.";
}
header('location:hw1.php');
?>