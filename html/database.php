<?php

$connection = mysqli_connect("localhost", "root", "","myusers");

header("location: ../../phpmyadmin/db_structure.php?server=1&db=myusers");

?>