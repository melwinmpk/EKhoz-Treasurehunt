<?php
    require 'core.php';
    if(isset ($_POST['username']) and !empty($_POST['username']))
       {
           $username=$_POST['username'];
           $_SESSION['ekhoj'] = array();
           $_SESSION['ekhoj']=array('username'=>$username,'current_question'=>1,'score'=>0); 
            
        filewrite($username,$username."\n");
            
        header('Location:questions.php');
    }

?>


<html>
<head>
    <title>E KHOz</title>
    <link rel="stylesheet" href=style.css>
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic|Source+Code+Pro:400,700" rel="stylesheet">
    </head>
    <body>
        <div class="logo">E KHOz</div>
        <div class="footer"><center>CREATED BY: MELWIN VARGHERSE P || 4th SEM || CSE || NMIT</center></div>
        
        <div class="container home">
        
            <h1> Welcome</h1>
            
            <div class="box1">
            <p class=title> Event Discription</p>
            <center><img src="assets/logo.jpg" alt="logo" height="200" width="200"></center>
            <p class="content"> Images say more than words then how about cracking a tech word from the images? Here's your chance to do it, for the first time in NMIT, the caption (term) hunting! The term may be in your reach but hard to hunt it down, don't worry there's a clue to help u hunt them. One who does the maximum hunting will be the HUNTER!
                </p>
            </div>
        
         <div class="box2">
            <p class=title>Rules</p>
            <p class="content">
             <ul>
                <li>Individual participation </li> <br/>
                <li>Time limit 20min </li><br/>
                <li>No use of any electronic devices</li><br/>
                <li>One who cracks the maximum no of images will be the winner</li><br/>
                 <li><strong>DO NOT CLOSE THE BROWSER UNTIL FINISHED</strong></li>
                </ul><br/>
             </p>
        </div>
                             <div class="box3">
                 
                                 <p class=title>Your Info</p>
                                 <?php
                                         if(isset ( $_SESSION['ekhoj']))
                                         {
                                             echo 'YOU ARE ALREADY LOGGED IN';
                                             
                                             echo '</div></div>
        <div class="footer"><center>ANAADYANTA 2016</center></div>';
                                        die();
                                         }
                                 ?>
                                  <p class="content">Your Name:</p>&nbsp;<br/>
                                 
                                <form action="index.php" method="POST">
                                <input type="text" name="username">
                                <input type="submit" value="Next">
                                </form>
                                
                                </div>
        </div>
        <div class="footer"><center>ANAADYANTA 2016</center></div>
    </body>
</html>