<?php
require 'core.php';
$question=getarray();

$username= $_SESSION['ekhoj']['username'];
$current_question= $_SESSION['ekhoj']['current_question'];
$score= $_SESSION['ekhoj']['score'].'<br>';
$answer_corr=$question[(int)$current_question]['ans'];

if($current_question==16)
    header("Location:final.php");

if(isset($_POST['usr_answer']) and !empty($_POST['usr_answer']))
{
    $answer=strtolower(trim($_POST['usr_answer']));   
        
    if($answer==$answer_corr)
    {
    filewrite($username,$current_question.' '.$question[(int)$current_question]['ques'].'=> '.$answer.' (1)'."\n");
      $info=1;
      $_SESSION['ekhoj']['current_question']++;  
      $_SESSION['ekhoj']['score']++;
        header("Location:questions.php?info=$info");
    }
    
    else 
    {
        filewrite($username,$current_question.' '.$question[(int)$current_question]['ques'].'=> '.$answer. ' (0) '."\n");
        $info=0;
        $_SESSION['ekhoj']['current_question']++;
        header("Location:questions.php?info=$info");
    }
   
}

 else if (isset($_POST['usr_answer']) and empty($_POST['usr_answer']))
    {
        $error='PLEAE FILL YOUR ANSWER';
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
      
        
        <div class="container">
        
            <h1>Questions</h1>
            
            <div class="box4">
               
             <p class=title>Quesion : <?php echo $current_question; ?></p>
         <div><strong><p class="content" id="question"><?php echo $question[(int)$current_question]['ques'];?></strong><br><br></div>
           <br> <br>
            <div class=img>
                <?php echo '<img src='.'"'.$question[(int)$current_question]['a'].'"'. 'alt=missing width=200 height=200>';
            echo '<img src='.'"'.$question[(int)$current_question]['b'].'"'. 'alt=missing width=200 height=200>';?>
                </div>
                </div>

            <div class='box3'>
                   
               <p class=title>Your Answer</p>
                <form method="post"  action="questions.php">
                <input type="text" name="usr_answer">
                <input type="submit" value="Submit">
                </form>
                
                <?php 
if (isset($error))  {
    echo '<br>'.$error.'<br>'; }
                    ?>
                
                <?php
if (isset($_GET['info']) and ($_GET['info'])==1){
    echo 'Answer to ' .($current_question-1).' was <strong>correct!</strong>';
    }
else if (isset($_GET['info']) and ($_GET['info'])==0){
    echo 'Answer to ' .($current_question-1).' was <strong>Incorrect!</strong>';
}
                     ?>                     
                             
                <p class=title>Your Info</p>
               
                <p class="content">
                    <strong>Name:</strong> <?php echo $username; ?> <br/></br>
                    <strong>Your Score:</strong> <?php echo $score; ?>
                </p>
            </div>

        </div>
        <div class="footer"><center>ANAADYANTA 2016</center></div>
    </body>
</html>