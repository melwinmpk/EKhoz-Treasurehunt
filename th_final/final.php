<?php 
require 'core.php';
?>

<html>
<head>
    <title>E KHOz</title>
    <link rel="stylesheet" href=style.css>
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic|Source+Code+Pro:400,700" rel="stylesheet">
    </head>
    <body>
        <div class="logo">E KHOz</div>
        <div class="footer"><center>CREATED BY: Melwin Varghese P || 4th SEM || CSE || NMIT</center></div>
        
        <div class="container home">
        
            <h1><?php echo $_SESSION['ekhoj']['username'].' , '; ?> You are done! </h1>
            
            <p class=title> FINAL SCORE: <?php echo $_SESSION['ekhoj']['score'];?></p>
        </div>
        <div class="footer"><center>ANAADYANTA 2016</center></div>
    </body>
</html>