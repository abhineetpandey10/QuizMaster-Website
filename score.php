<?php
    session_start();
    if(isset($_SESSION['start_time']))
    {
        if((time()-$_SESSION['start_time'])>900)
        {
            echo("Session Expired!!");
            session_unset();
            session_destroy();
        }
        else
        {
            $score=0;
            if(isset($_POST['q1']))
                if($_POST['q1']=='c') $score+=1;
            if(isset($_POST['q2']))
                if($_POST['q2']=='a') $score+=1;
            if(isset($_POST['q3']))
                if($_POST['q3']=='b') $score+=1;
            if(isset($_POST['q4']))
                if($_POST['q4']=='c') $score+=1;
            if(isset($_POST['q5']))
                if($_POST['q5']=='d') $score+=1;
            echo("<center><h1>Your Score:</h1><h2>$score</h2></center>");
        }
    }
    else echo("Session start time not set\n");
?>