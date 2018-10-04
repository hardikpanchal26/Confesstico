<?php
session_start();
$error='';


if (isset($_POST['submit'])) {

if (empty($_POST['uname']) || empty($_POST['pss'])) {
$error = "Invalid Admin Id or Password";
}


else
{
$admin_id=$_POST['uname'];
$password=$_POST['pss'];

$connection = mysqli_connect("localhost", "root", "","myusers");

$sql = "SELECT num FROM admin where admin_id = '$admin_id' AND password = '$password' ";
$result = mysqli_query($connection,$sql);

$count = mysqli_num_rows($result);

if ($count == 1) {  
$_SESSION["admin_name"] = $admin_id;
header("location: admin_panel.php");

} 

else {
$error = "Invalid Admin Id or Password";
}
mysqli_close($connection);

}
}

?>