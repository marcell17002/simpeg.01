<?php
$username   = $_POST['username'];
$pass       = $_POST['password'];

include 'connection.php';

$user = mysqli_query($db,"select * from userlis where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    $data = mysqli_fetch_assoc($user);
 
	// cek jika user login sebagai admin
	if($data['username']=="admin"){
		header("location:registration.php");
	}else {
        header("location:all_report.php");
    }
}else
{
    header("location:login.php");
}
?>