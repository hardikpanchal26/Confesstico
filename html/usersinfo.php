
<?php
   $connection = mysqli_connect("localhost", "root", "","myusers");
   session_start();
   
   $user_check = $_SESSION['admin_name'];

   
   $ses_sql = mysqli_query($connection,"select * from admin where admin_id = '$user_check' ");
   $query = mysqli_query($connection,"select * from user");
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
        <div class="box">
            
            <table border=1 width="100%">
                <tr>
                    <td align="center"><p class="box-h">Username</p></td>
                    <td align="center"><p class="box-h">Email</p></td>
                    <td align="center"><p class="box-h">Mobile</p></td>
                    <td align="center"><p class="box-h">Birthdate</p></td>
                    <td align="center"><p class="box-h">Location</p></td>
                </tr>
            

            <?php 
               
                while($val =  mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    echo '<tr>
                       <td align="center">' .$val['fn'].' '.$val['sn'].'</td>
                       <td align="center">' .$val['email'].'</td>
                       <td align="center">' .$val['mob'].'</td>
                       <td align="center">' .$val['bday'].'</td>
                       <td align="center">' .$val['loc'].'</td>
                    </tr>'
                    ;
                    }
                    echo '</table>';
            ?>
        </div>
	</body>
</html>