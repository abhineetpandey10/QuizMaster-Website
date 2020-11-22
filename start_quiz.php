<?php
    session_start();
?>
<html>
    <head>
        <title>Start Quiz</title>
    </head>
    <center>
    <body>
        <link rel="stylesheet" href="stylesheet.css"/>
        <h1 id="website_heading">Quizmaster</h1>
        <form action="questions.php" method="post" id="startform">
        <ul >
            <li>You will be given 15 minutes to Attemp this quiz</li>
            <li>You have to complete the quiz and submit it in 15 minutes.</li>
            <li>Please manage your time so that you get enough time to submit the quiz. If you fail to submit, your quiz data will be destroyed, and your hardwork you go in vain.</li>
            <li>Please read the questions carefully. ALL QUESTIONS ARE COMPULSORY.</li>
            <li>BEST OF LUCK</li> 
        <ul>
            <br/br/>
        <input type="submit" value="Start Quiz">
        </form>
    </body>
</center>
</html>
<?php
    $_SESSION['set']=1;
?>