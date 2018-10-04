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



            <p class="box-h">"Confessions</p>

            
            <div class="box on-hover" align="center" style="padding:5px">
                <a href="confess.html" class="post-btn"> Post a Confession</a>
            </div>

            <div class="box">
            <p style="font-size:12px; margin:0px">5 hr ago</p>
            <table width="100%">
                <tr>
                    <td width="50%"><p style="font-size:14px; font-weight: bold">Groups :</p></td>  
                    <td><p style="font-size:14px; font-weight: bold">Categories :</p></td>
                </tr>
                <tr>
                    <td>
                    <a href="#" class="tag" style="background-color: teal">Old School Friends</a>
                    <a href="#" class="tag" style="background-color: brown">College Trolls</a>
                    </td>
                    <td>
                    <a href="#" class="tag">Troll</a>
                    </td>
                </tr>
            </table>
           
            <p> <h4 style="margin:0;  color:#0f0000">Confession #we_rock</h4>
             <hr /> 
            We last benchers, have got a great idea to tackle some of the boring lectures, playing COC on mobiles, keeping it under desks. We have been doing it since, the start of the semester.
            </p>
                <table style="color:#1b4f72; font-size:14px"><tr>
                <td><img src="../images/support.png" alt="support" title="support" class="gest" /></td>
                <td>10 Supports</td>
                <td width="20px"></td>
                <td><img src="../images/oppose.png" alt="oppose" title="oppose" class="gest" /></td>
                <td>2 Opposes</td>
                <td width="20px"></td>
                <td><img src="../images/comment.png" alt="comment" title="comment" class="gest" /></td>
                <td>6 Comments</td>
                </tr></table>
            </div>

            <div class="box">
            <p style="font-size:12px; margin:0px">5 hr ago</p>
            <table width="100%">
                <tr>
                    <td width="50%"><p style="font-size:14px; font-weight: bold">Groups :</p></td>  
                    <td><p style="font-size:14px; font-weight: bold">Categories :</p></td>
                </tr>
                <tr>
                    <td>
                    <a href="#" class="tag" style="background-color: indigo">Sarcasm Reloaded</a>
                    <a href="#" class="tag" style="background-color: green">LDRP Confessions</a>
                    <a href="#" class="tag" style="background-color: olive">College Trolls</a>
                    </td>
                    <td>
                    <a href="#" class="tag">Proud</a>
                    <a href="#" class="tag">Troll</a>
                    <a href="#" class="tag">Revenge</a>
                    </td>
                </tr>
            </table>
            <hr /> 
            <p> <h4 style="margin:0;  color:#0f0000">Confession #millionaire</h4>
             <img src="../images/conf/conf2.jpg" class="img-b" alt="confession" />
            </p>
                <table style="color:#1b4f72; font-size:14px"><tr>
                <td><img src="../images/support.png" alt="support" title="support" class="gest" /></td>
                <td>10 Supports</td>
                <td width="20px"></td>
                <td><img src="../images/oppose.png" alt="oppose" title="oppose" class="gest" /></td>
                <td>2 Opposes</td>
                <td width="20px"></td>
                <td><img src="../images/comment.png" alt="comment" title="comment" class="gest" /></td>
                <td>6 Comments</td>
                </tr></table>
            </div>

            <div class="box">
            <p style="font-size:12px; margin:0px">5 hr ago</p>
            <table width="100%">
                <tr>
                    <td width="50%"><p style="font-size:14px; font-weight: bold">Groups :</p></td>  
                    <td><p style="font-size:14px; font-weight: bold">Categories :</p></td>
                </tr>
                <tr>
                    <td>
                    <a href="#" class="tag" style="background-color: maroon">LDRP Confessions</a>
                    <a href="#" class="tag" style="background-color: chocolate">College Trolls</a>
                    </td>
                    <td>
                    <a href="#" class="tag">Hate</a>
                    <a href="#" class="tag">Anger</a>
                    <a href="#" class="tag">Frustration</a>
                    </td>
                </tr>
            </table>
            <hr /> 
            <p> <h4 style="margin:0;  color:#0f0000">Confession #take_a_stand</h4>
            I dont know why students fear so much in opposing something which is totally worng. Stand out guys, we deserve the freedom, enjoy the life. Open up guys, act educated. Dont let someone get comfortable disrespecting you..
            </p>
                <table style="color:#1b4f72; font-size:14px"><tr>
                <td><img src="../images/support.png" alt="support" title="support" class="gest" /></td>
                <td>10 Supports</td>
                <td width="20px"></td>
                <td><img src="../images/oppose.png" alt="oppose" title="oppose" class="gest" /></td>
                <td>2 Opposes</td>
                <td width="20px"></td>
                <td><img src="../images/comment.png" alt="comment" title="comment" class="gest" /></td>
                <td>6 Comments</td>
                </tr></table>
            </div>

            <div class="box">
            <p style="font-size:12px; margin:0px">5 hr ago</p>
            <table width="100%">
                <tr>
                    <td width="50%"><p style="font-size:14px; font-weight: bold">Groups :</p></td>  
                    <td><p style="font-size:14px; font-weight: bold">Categories :</p></td>
                </tr>
                <tr>
                    <td>
                    <a href="#" class="tag" style="background-color: magenta">Hidden Secrets 007</a>
                    <a href="#" class="tag" style="background-color: blue">Old School Friends</a>
                    <a href="#" class="tag" style="background-color: green">College Trolls</a>
                    </td>
                    <td>
                    <a href="#" class="tag">I</a>
                    <a href="#" class="tag">Me</a>
                    <a href="#" class="tag">Myself</a>
                    </td>
                </tr>
            </table>
            <hr /> 
            <p> <h4 style="margin:0;  color:#0f0000">Confession #attitue</h4>
            <img src="../images/conf/conf4.jpg" class="img-b" alt="confession" />
            </p>
                <table style="color:#1b4f72; font-size:14px"><tr>
                <td><img src="../images/support.png" alt="support" title="support" class="gest" /></td>
                <td>10 Supports</td>
                <td width="20px"></td>
                <td><img src="../images/oppose.png" alt="oppose" title="oppose" class="gest" /></td>
                <td>2 Opposes</td>
                <td width="20px"></td>
                <td><img src="../images/comment.png" alt="comment" title="comment" class="gest" /></td>
                <td>6 Comments</td>
                </tr></table>
            </div>

            <div class="box">
            <p style="font-size:12px; margin:0px">5 hr ago</p>
            <table width="100%">
                <tr>
                    <td width="50%"><p style="font-size:14px; font-weight: bold">Groups :</p></td>  
                    <td><p style="font-size:14px; font-weight: bold">Categories :</p></td>
                </tr>
                <tr>
                    <td>
                    <a href="#" class="tag" style="background-color: #fe7f00">LDRP Confessions</a>
                    </td>
                    <td>
                    <a href="#" class="tag">Frustration</a>
                    <a href="#" class="tag">Grief</a>
                    <a href="#" class="tag">Pain</a>
                    </td>
                </tr>
            </table>
            <hr /> 
            <p> <h4 style="margin:0;  color:#0f0000">Confession #wake_up</h4>
            The coding culture is dying at LDRP-ITR. All the CE-IT students, please open your eyes. Assignments, Attendence, Grades etc won't help you much.Do some coding, Do some open source. You guys actually don't know anything. You guys are just wasting your time.
            </p>
                <table style="color:#1b4f72; font-size:14px"><tr>
                <td><img src="../images/support.png" alt="support" title="support" class="gest" /></td>
                <td>10 Supports</td>
                <td width="20px"></td>
                <td><img src="../images/oppose.png" alt="oppose" title="oppose" class="gest" /></td>
                <td>2 Opposes</td>
                <td width="20px"></td>
                <td><img src="../images/comment.png" alt="comment" title="comment" class="gest" /></td>
                <td>6 Comments</td>
                </tr></table>
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
        	<img src="../images/img2/Anger.png" 		class="img-ctg" title="Anger" />
        	<img src="../images/img2/Betrayal.png" 		class="img-ctg" title="Betrayal" />
        	<img src="../images/img2/Broken.png" 		class="img-ctg" title="Broken" />
        	<img src="../images/img2/Cheat.png" 		class="img-ctg" title="Cheat" />
        	<img src="../images/img2/Crush.png" 		class="img-ctg" title="Crush" />
        	<img src="../images/img2/Envy.png"	 		class="img-ctg" title="Envy" /> 
        	<img src="../images/img2/Frustration.png" 	class="img-ctg" title="Frustration" />
        	<img src="../images/img2/Hate.png"	 		class="img-ctg" title="Hate" />  
        	<img src="../images/img2/Jealousy.png" 		class="img-ctg" title="Jealousy" />
        	<img src="../images/img2/Proud.png"	 		class="img-ctg" title="Proud" /> 
        	<img src="../images/img2/Revenge.png" 		class="img-ctg" title="Revenge" />
        	<img src="../images/img2/Troll.png"	 		class="img-ctg" title="Troll" />	
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