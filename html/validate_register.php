<?php


$error='';


if (isset($_POST['sign'])) {

$fn=$_POST['fn'];
$sn=$_POST['sn'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$pss=$_POST['pss'];
$date=$_POST['date'];
$loc=$_POST['loc'];


$connection = mysqli_connect("localhost", "root", "","myusers");


$sql = "INSERT INTO `user` (`id`, `fn`, `sn`, `email`, `mob`, `pass`, `bday`, `loc`) VALUES (NULL, '$fn', '$sn', '$email', '$mob', '$pss', '$date', '$loc');";
mysqli_query($connection,$sql);

mysqli_close($connection);

$connection = mysqli_connect("localhost", "root", "","myusers");
$sql2 = "SELECT id FROM user where email = '$email' AND pass = '$pss'";
$result = mysqli_query($connection,$sql2);

$count = mysqli_num_rows($result);

if ($count == 1) {  
$_SESSION["user_log"] = $email;
header("location: timeline.php");

} 

else {
$error = "Invalid Admin Id or Password";
}

mysqli_close($connection);

}

?>