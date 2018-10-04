<?php
   $connection = mysqli_connect("localhost", "root", "","myusers");
   session_start();
   
   $user_check = $_SESSION['user_log'];
  
   
   $ses_sql = mysqli_query($connection,"select * from user where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   if(!isset($_SESSION['user_log'])){
      header("location : welcome.php");
   }   
?>

<html>
<head>
    <title>Confesstico</title>
    <link href="https://fonts.googleapis.com/css?family=Courgette|Julee|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet1.css">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet2.css">
    <script type="text/javascript" src="../javascript/script1.js"></script>
</head>

<body class="body">
    
    <!-- Header** -->
    <div class="header" style="position:fixed; padding-top:10px" >
        <a href="#" class="main-heading" style="font-size:24px; letter-spacing:0">"Confesstico</a>
        <div style="padding: 8px 0 5px 0">        
        <a href="timeline.php" class="nav-item">Timeline</a>
        <a href="groups.php" class="nav-item">Groups</a>
        <a href="myprofile.php" class="nav-item">My Profile</a>
        <a href="mycontacts.php" class="nav-item">My Contacts</a>
        <a href="myconfessions.php" class="nav-item">My Confessions</a>
        <a href="confess.php" class="nav-item">Confess</a>
        </div>
        <div style="background-color: #fe7f00; width:100%; height:5px; box-shadow: 0 2px 10px 0 #888888;"></div>
    </div>
    <!-- **Header -->
    
    
    <!-- Content** --><br /><br /><br /><br />
    <table width="100%">
    <tr> <!-- Only 1 row with 3 Columns --> 
     
    <!-- Left Column** -->
    <td width="25%" valign="top" >
        
        <div class="box" align="center">
            <p class="box-h"> Profile </p><br />
            <?php 
            echo 'Logged In as <b title="@DU0000">' . $row['fn'] .' '. $row['sn'] . '</b> <br />';
            ?>
            <a href="logout.php" class="l">Log Out</a>
            <img src="../images/profile_pic.png" alt="profile_pic" class="img-profile">
            <br /><br />
            <div class="entity">
                <?php
                echo '<p  class="usr" title="@DU0000">' . $row['fn'] .' '. $row['sn'] . '</p>';
                echo '<p>' . $row['loc'] . '</p>';
                echo '<p>' . $row['bday'] . '</p>';
                echo '<hr style="margin:0" />';
                echo '<p>+91 ' . $row['mob'] . '</p>';
                echo '<p>' . $row['email'] .'</p>';
                ?>
            </div>
            <br />
            
        </div> 

        <div class="box">
            <p class="box-h">Groups</p>
            <br /><br />
            <div class="entity">
                <p style="color: #fe7f00">"Confesstico</p>
                <p>LDRP Confessions</p>
                <p>Hidden Secrets 007</p>
                <p>Old School Friends</p>
                <p>College Trolls</p>
                <p>Sarcasm Reloaded</p>
            </div>
            <br />
            <a href="#" style="padding-left:25px" id="l1">+ More ...</a>
            
            <div align="center">
            <br />
            <a href="#" class="btn">Create New Group</a>
            </div>
        </div>

        <div class="box">
            <p class="box-h">Top Categories</p>
            <br />
            
            <a href="#" class="tag">Anger</a>
            <a href="#" class="tag">Betrayal</a>
            <a href="#" class="tag">Broken</a>
            <a href="#" class="tag">Cheat</a>
            <a href="#" class="tag">Crush</a>
            <a href="#" class="tag">Envy</a>
            <a href="#" class="tag">Frustration</a>
            <a href="#" class="tag">Hate</a>
            <a href="#" class="tag">Jealousy</a>
            <a href="#" class="tag">Proud</a>
            <a href="#" class="tag">Revenge</a>
            <a href="#" class="tag">Troll</a>
        </div>
    </td>
    <!-- **Left Column -->

    <!-- Middle Column -->
    <td width="50%" valign="top">
        
        <div class="box">   

            <!-- - - - - - - - - - - - - - - - - - - - MAIN CONTENT START- - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->



            <p class="box-h">"My Groups</p><br />

            <div align="center">
                <img src="../images/groups/g1.png" class="img-grp" title="LDRP Confessions" />
                <img src="../images/groups/g2.jpg" class="img-grp" title="Hidden Secrets 007" />
                <img src="../images/groups/g3.png" class="img-grp" title="LDRP Confessions" />
                <img src="../images/groups/g4.png" class="img-grp" title="LDRP Confessions" />
                <img src="../images/groups/g5.jpg" class="img-grp" title="LDRP Confessions" />
            </div>
                <br /><br />
                <hr />

            <div class="box">
            	<form action="#" method="post">
                	Join a new group <input type="text" placeholder="Group Name" id="gname" /> 
                    <input type="submit" value="Join" class="btn" onclick="javascript : return joingrp_v()"/>
                    <p id="gname_msg" style="color:red; padding:0; margin:0"></p>
            	</form>
            </div>

        	<div class="box">
        		<p class="box-h">"Create a New Group</p><br />
        		<form action="#" method="post" id="create_group">
        			<b>Enter Unique Group Name</b> <input type="text" placeholder="Group Name" id="grp" />
                    <p id="grp_msg" style="color:red; padding:0; margin:0; text-align:center"></p>
                    <br /><br />
        			<b>Group Scope</b><br />
        			    Private Group 	<input type="radio" name="scope" checked /> &nbsp&nbsp
        				Protected Group	<input type="radio" name="scope" /> &nbsp&nbsp
        				Public Group	<input type="radio" name="scope" /> &nbsp&nbsp<br /><br />
        			<b>Add Members :</b> 
        			<p style="font-size:12px; margin:0px">(U can upload full contact lists from 
        				<a href="mycontacts.html" class="l">My Contacts</a> or add contacts individually)
        			</p>
        			<input type="text" placeholder="Contact Lists" id="cl" />
                    <input type="text" placeholder="Individual Contacts" id="il" /><br />
        			<p style="font-size:12px; line-height:12px">Protected and Private groups cannot be deleted by its creator. It will automatically deleted once all its members leaves the group.</p>
        			<input type="submit" value="Create Group" style="width:180px; height:32px;" class="btn" onclick="javascript:return newgroup_v()" />
        		</form>
        	</div>


            <!-- - - - - - - - - - - - - - - - - - - - MAIN CONTENT ENDS- - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
        </div>    
    </td>
    <!-- Middle Column -->

    <!-- Right Column** -->
    <td width="25%" valign="top">
        
        <div class="box">
            <p class="box-h">Search Groups</p>
            <input type="text" name="search" placeholder="Group Name" />
        </div>

        <div class="box">
            <p class="box-h">Confessions Categories</p><br />  
            <img src="../images/img2/Anger.png"         class="img-ctg" title="Anger" />
            <img src="../images/img2/Betrayal.png"      class="img-ctg" title="Betrayal" />
            <img src="../images/img2/Broken.png"        class="img-ctg" title="Broken" />
            <img src="../images/img2/Cheat.png"         class="img-ctg" title="Cheat" />
            <img src="../images/img2/Crush.png"         class="img-ctg" title="Crush" />
            <img src="../images/img2/Envy.png"          class="img-ctg" title="Envy" /> 
            <img src="../images/img2/Frustration.png"   class="img-ctg" title="Frustration" />
            <img src="../images/img2/Hate.png"          class="img-ctg" title="Hate" />  
            <img src="../images/img2/Jealousy.png"      class="img-ctg" title="Jealousy" />
            <img src="../images/img2/Proud.png"         class="img-ctg" title="Proud" /> 
            <img src="../images/img2/Revenge.png"       class="img-ctg" title="Revenge" />
            <img src="../images/img2/Troll.png"         class="img-ctg" title="Troll" />    
        </div>

        <div class="box">
            <p class="box-h">Advertisements</p>
            <div align="center">
                <br />
                <img src="../images/adverts/ad1.jpg" alt="ad1" class="img-b" />
                <br />
                <img src="../images/adverts/ad2.jpg" alt="ad2" class="img-b" />
                <br />
                <img src="../images/adverts/ad3.jpg" alt="ad3" class="img-b" />
                <br /><br />
                <a href="#" class="btn">Advertise with Us</a>
            </div>
        </div>

        <div class="box" align="center">
            <img src="../images/adverts/bug.png" alt="bug" class="img-b" />
            <br /><br />
            <a href="#" class="btn">Report Bug</a>            
        </div>
    </td>
    <!-- **Right Column -->

    </tr>
    </table>
    <!-- Content** -->
    
    
    <!-- Footer **-->
    <div class="footer">
        <div style="background-color: #fe7f00; width:100%; height:5px; box-shadow: 0 -2px 10px 0 #888888;">
        </div>
        <a href="about.html" class="l">about</a>   &nbsp
        <a href="about.html" class="l">contact</a> &nbsp
        <a href="about.html" class="l">faq</a>     &nbsp
        <a href="about.html" class="l">terms</a>   &nbsp
        <a href="about.html" class="l">policy</a>
        <p style="margin:0">Developed by Hardik Panchal and Hinal Upadhyay. <br />
       All rights reserved @ Confesstico. Copyright &copy 2017. <br />
       Made with &nbsp<img src="../images/heart.png" alt="heart"/ >&nbsp in India
       </p>
    </div>
    <!--** Footer --> 
</body>
</html>