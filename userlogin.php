<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'bus');

$name=$_POST['user'];
$pass=$_POST['Password'];

$s="select * from usertable where name='$name' && Password='$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username']=$name;
	header('location:search_data.php');
}else{
	header('location:login_user.php');
}
?>