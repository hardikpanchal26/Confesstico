
<?php
   $connection = mysqli_connect("localhost", "root", "","myusers");
   session_start();
   
   $user_check = $_SESSION['admin_name'];

   
   $ses_sql = mysqli_query($connection,"select * from admin where admin_id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   if(!isset($_SESSION['admin_name'])){
      header("location : admin_login.php");
   } 
   
?>
<html>
	<head>
		<title>Confesstico</title>
    	<link href="https://fonts.googleapis.com/css?family=Courgette|Julee|Open+Sans" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="../css/stylesheet1.css">
    	<style>
    	  
        .admino:hover{
        	opacity:0.8;
        	background-color:#fe7f00;
        	cursor:pointer;
        }
        </style>
	</head>
	<body class="body">
		<!-- Header** -->
    	<div class="header" style="padding:10px 0 10px 0">
        	<a href="welcome.php" class="main-heading">"Confesstico</a>
        	<h2 style="font-family: Julee"><u>Admin Panel</u> </h2>
    	</div>
    	<div style="background-color: #fe7f00; width:100%; height:5px; box-shadow: 0 2px 10px 0 #888888;"></div>
    	<!-- **Header -->
        <br />
        <div align="center">
         <?php echo 'User : ' . $row['admin_id'] . '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Role : ' . $row['role'] ; 
         ?>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <a href="logout_admin.php">exit</a>
        </div>
    	<br /><br />
        <table align="center" cellspacing="30px">
            <tr>
                <td align="center">
                    <h2 class="box-hbig" >Files and Folders</h2><hr />
                    <div class="box admino">
                       <a href="../"> <img src="../images/admin/ftp.png" /></a>
                    </div>
                </td>
                <td align="center">
                     <h2 class="box-hbig">Databases</h2><hr />
                    <div class="box admino">
                        <a href="database.php"><img src="../images/admin/database.png" /></a>
                    </div>
                </td>
                <td align="center">
                     <h2 class="box-hbig">Users</h2><hr />
                    <div class="box admino" >
                        <a href="usersinfo.php"><img src="../images/admin/users.png" /></a>
                    </div>
                </td>

            </tr>
        </table>
	</body>
</html>