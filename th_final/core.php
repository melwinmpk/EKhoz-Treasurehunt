<?php
ob_start();
session_start();


function getarray() {
    $q1='Software program to create original artistic images';
    $o1a='assets/1a.jpg';
    $o1b='assets/1b.jpg';
    $a1='arron';

    $q2='Programming language designed by IBM for scientific computing';
    $o2a='assets/2a.jpg';
    $o2b='assets/2b.jpg';
    $a2='fortran';

    $q3="World's most used web server software";
    $o3a='assets/3a.jpg';
    $o3b='assets/3b.jpg';
    $a3='apache';

    $q4='First antivirus software.';
    $o4a='assets/4a.jpg';
    $o4b='assets/4b.jpg';
    $a4='reaper';

    $q5='Clashing with others using strategy';
    $o5a='assets/5a.jpg';
    $o5b='assets/5b.jpg';
    $a5='clash of clans';

    $q6='Replacement of Nehalem microarchitecture processor';
    $o6a='assets/6a.jpg';
    $o6b='assets/6b.jpg';
    $a6='sandy bridge';

    $q7='Answer need not be guessed';
    $o7a='assets/7a.jpg';
    $o7b='assets/7b.jpg';
    $a7='erlang';

    $q8='Hindi,English,French,Chinese,Japnese etc';
    $o8a='assets/8a.jpg';
    $o8b='assets/8b.jpg';
    $a8='duolingo';

    $q9='The book all have read';
    $o9a='assets/9a.jpg';
    $o9b='assets/9b.jpg';
    $a9='facebook';

    $q10="Don't know anything? Ask Him";
    $o10a='assets/10a.jpg';
    $o10b='assets/10b.jpg';
    $a10='google';

    $q11='Characters are the variables in this language';
    $o11a='assets/11a.jpg';
    $o11b='assets/11b.jpg';
    $a11='shakespeare';

    $q12='Don\'t eat it wait for it to use';
    $o12a='assets/12a.jpg';
    $o12b='assets/12b.jpg';
    $a12='marshmallow';

    $q13='Happens very quickly and promptly';
    $o13a='assets/13a.jpg';
    $o13b='assets/13b.jpg';
    $a13='swift';

    $q14='Wanna buy<br/>';
    $o14a='assets/14a.jpg';
    $o14b='assets/14b.jpg';
    $a14='flipkart';

    $q15='First android phone';
    $o15a='assets/15a.jpg';
    $o15b='assets/15b.png';
    $a15='htc dream';
    
    


$question_array=array(1=>array('ques'=>$q1,'a'=>$o1a,'b'=>$o1b,'ans'=>$a1),
                2=>array('ques'=>$q2,'a'=>$o2a,'b'=>$o2b,'ans'=>$a2),
                3=>array('ques'=>$q3,'a'=>$o3a,'b'=>$o3b,'ans'=>$a3),
                4=>array('ques'=>$q4,'a'=>$o4a,'b'=>$o4b,'ans'=>$a4),
                5=>array('ques'=>$q5,'a'=>$o5a,'b'=>$o5b,'ans'=>$a5),
                6=>array('ques'=>$q6,'a'=>$o6a,'b'=>$o6b,'ans'=>$a6),
                7=>array('ques'=>$q7,'a'=>$o7a,'b'=>$o7b,'ans'=>$a7),
                8=>array('ques'=>$q8,'a'=>$o8a,'b'=>$o8b,'ans'=>$a8),
                9=>array('ques'=>$q9,'a'=>$o9a,'b'=>$o9b,'ans'=>$a9),
                10=>array('ques'=>$q10,'a'=>$o10a,'b'=>$o10b,'ans'=>$a10),
                11=>array('ques'=>$q11,'a'=>$o11a,'b'=>$o11b,'ans'=>$a11),
                12=>array('ques'=>$q12,'a'=>$o12a,'b'=>$o12b,'ans'=>$a12),
                13=>array('ques'=>$q13,'a'=>$o13a,'b'=>$o13b,'ans'=>$a13),
                14=>array('ques'=>$q14,'a'=>$o14a,'b'=>$o14b,'ans'=>$a14),
                15=>array('ques'=>$q15,'a'=>$o15a,'b'=>$o15b,'ans'=>$a15),
               );
    return ($question_array);       
}

function filewrite($a,$b)
{
$myfile = fopen("files/$a.txt", "a") or die("Unable to open file!");
$txt = $b;
fwrite($myfile, $txt);
fclose($myfile);
}
