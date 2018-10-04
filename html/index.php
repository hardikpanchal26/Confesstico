<?php
session_start();

include('validate_login.php');
if(isset($_SESSION['user_log'])){
    header("location: timeline.php");
}

include('validate_register.php');
if(isset($_SESSION['user_log'])){
    header("location: timeline.php");
}


?>

<html>

<head>
	<title>Confesstico</title>
    <link href="https://fonts.googleapis.com/css?family=Courgette|Julee|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet1.css">
    <script type="text/javascript" src="../javascript/script1.js"></script>
</head>

<body class="body">
    
    <!-- Header** -->
    <div class="header" style="padding:30px 0 30px 0">
        <a href="welcome.php" class="main-heading">"Confesstico</a>
        <h3 style="margin:0; font-family: Julee">Say anything without any fear </h3>
    </div>
    <div style="background-color: #fe7f00; width:100%; height:5px; box-shadow: 0 2px 10px 0 #888888;"></div>
    <!-- **Header -->
    
    
    <!-- Content** -->
    <table width="100%">
    <tr>
     
    <!-- Left Column -->
    <td width="50%" valign="top" >

        <div class="box" align="center">

            <h2 class="box-hbig">"Welcome to Confesstico</h2>
            <hr />
            <br /><br /><br />
            <img src="../images/confession.png"/>
            <br /><br />
            <ul align="left">
            <li>Confesstico lets you post your confessions anonymously.</li>
            <li>We will let you form and join groups, confess anything and nobody will be able to track you.</li>
            <li>Here you can post what you wish to deliver to the people anonymously.</li>
            </ul>      
        </div>

        <div class="box" align="center">
            <br /><br />
            <p>Over 1 million users</p>
            <h1 style="color:#0f0000; font-family:Courgette; margin:29px">"C</h1>
            <a class="btn" href="welcome.php" style="font-family:Courgette; font-size:20px">"Confesstico</a>
            <p style="padding:12px">Register your account on Confesstico today</p>
            <br /><br />
        </div>

    </td>
    <!-- **Left Column -->

    <!-- Right Column** -->
    <td width="50%" valign="top">
        <a id="log"></a>
        <div class="box">
            <h2 class="box-hbig" align="center">"Log In</h2>
            <hr />
            <p>If you are not a registered user, please <a href="#sig" class="l"><b>Sign Up</b></a> first</p>
            
            <form action="" method="post">
                <input type="text" id="uname" name="user_n" placeholder="Username/Email/Mobile" />
                <input type="password" id="password" name="pass_wd" placeholder="Password" /><br />
                <span ><?php echo '<p style="color:#fe7f00">' . $error2 . '</p>'; ?></span>
                <input type="submit" id="login" name="log" class="btn" value="Log In" onclick="javascript:return login_v()"/>
                <a href="#" class="l">forgot password</a>
                </p>
            </form>

        </div>

        <a id="sig"></a>
        <div class="box" >
            <h2 class="box-hbig" align="center">"Sign Up</h2>
            <hr />
            <p>If you have already registered, please simply <a href="#log" class="l"><b>Log In</b></a></p>
            <form action="" method="POST">
                
                <div style="display:inline">
                <label>Your Name</label>
                <input type="text" id="first_name" name="fn" placeholder="First Name" />
                <input type="text" id="surname" name="sn" placeholder="Surname" />
                </div>
                <br />
                <div style="display:inline">
                <label>Email Id</label>
                <input type="email" id="email" name="email" placeholder="Email Id" /> 
                </div>
                <br />
                <div style="display:inline">
                <label>Mobile</label>
                <input type="text" id="mobile" name="mob" placeholder="Mobile Number"/>
                </div>
                <br />
                <div style="display:inline">
                <label>Password</label> 
                <input type="password" id="rpassword" name="pss" placeholder="Password"/>
                <input type="password" id="rconfirm_password" placeholder="Confirm Password"/>
                </div>
                <br />
                <div style="display:inline">
                <label>Birthday</label>
                <input type="date" name="date"/>
                </div>
                <br />
                <div style="display:inline">
                <label>Location</label> 
                <input type="text" id="location" name="loc" placeholder="Location"/>
                </div>
                <br />
                <p style="font-size:12px; margin-left:10px">By clicking on register, you agree to our terms and policy.</p>
                <span ><?php echo '<p style="color:#fe7f00">' . $error . '</p>'; ?></span>
                <input type="submit" name="sign" class="btn" value="Sign Up" onclick="javascript : return register_v()" /> &nbsp 
                <input type="reset" class="btn">
                
            </form>
        <div>

    </td>
    <!-- **Right Column -->

    </tr>
    </table>

    <!-- Content** -->
    
    
    <!-- Footer **-->
       <div class="footer">
        <div style="background-color: #fe7f00; width:100%; height:5px; box-shadow: 0 -2px 10px 0 #888888;">
        </div>
        <div align="left">&nbsp &nbsp<a href="admin_login.php" class="l">Admin Panel</a></div>
        <div style="margin-top:-20px">
        <a href="about.html" class="l">about</a>   &nbsp
        <a href="about.html" class="l">contact</a> &nbsp
        <a href="about.html" class="l">faq</a>     &nbsp
        <a href="about.html" class="l">terms</a>   &nbsp
        <a href="about.html" class="l">policy</a>
        </div>
       <p style="margin:0 0 0 5px">Developed by Hardik Panchal and Hinal Upadhyay. <br />
       All rights reserved @ Confesstico. Copyright &copy 2017. <br />
       Made with &nbsp<img src="../images/heart.png" alt="heart"/ >&nbsp in India
       </p>
       </div>
    <!--** Footer --> 

</body>
</html>