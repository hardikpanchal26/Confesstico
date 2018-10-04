 
<?php
include('validate_admin_login.php');
if(isset($_SESSION['login_user'])){
    header("location: admin_panel.php");
}
?>
<html>
	<head>
		<title>Confesstico</title>
    	<link href="https://fonts.googleapis.com/css?family=Courgette|Julee|Open+Sans" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="../css/stylesheet1.css">
	</head>
	<body class="body">
		<!-- Header** -->
    	<div class="header" style="padding:10px 0 10px 0">
        	<a href="welcome.html" class="main-heading">"Confesstico</a>
        	<h2 style="font-family: Julee"><u>Admin Panel</u> </h2>
    	</div>
    	<div style="background-color: #fe7f00; width:100%; height:5px; box-shadow: 0 2px 10px 0 #888888;"></div>
    	<!-- **Header -->

    	<br /><br />
    	<form action="" method="POST">
    		<div align="middle">
    		<div class="box" align="middle" style="width:30%">
    		<h2 class="box-hbig">"Admin Login</h2><hr />
    		<br />
    		<p style="margin:0"><b>Admin Id</b></p>
    		<input type="text" name="uname" placeholder="Admin Id" />
    		<br /><br />
    		<p style="margin:0"><b>Password</b></p>
    		<input type="password" name="pss" placeholder="Password" />
            <span ><?php echo '<p style="color:#fe7f00">' . $error . '</p>'; ?></span>
    		<input type="submit" name="submit" class="btn" style="width:200px" value="Go to Admin Panel" />
        
    		</div>
    	</div>
    </form>
     <br />
     <a href="welcome.php" class="btn">Back to Confesstico</a>
	</body>
</html>