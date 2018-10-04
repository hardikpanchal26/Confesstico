<?php

$error2='';

if (isset($_POST['log'])) {

if (empty($_POST['user_n']) || empty($_POST['pass_wd'])) {
$error2 = "Invalid Login Credentials";
}

else
{
$user_n=$_POST['user_n'];
$pass_wd=$_POST['pass_wd'];

$connection = mysqli_connect("localhost", "root", "","myusers");

mysqli_close($connection);

$connection = mysqli_connect("localhost", "root", "","myusers");
$sql2 = "SELECT id FROM user where email = '$user_n' AND pass = '$pass_wd'";
$result = mysqli_query($connection,$sql2);
$count = mysqli_num_rows($result);

if ($count == 1) {  
$_SESSION["user_log"] = $user_n;
header("location: timeline.php");

} 

else {
$error2 = "Invalid Login Credentials";
}

mysqli_close($connection);

}

}

?>