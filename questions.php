<?php
    session_start();
    if(isset($_SESSION['set']))
        if($_SESSION['set']==1)
            $_SESSION['start_time']=time();
    else
        echo("Session variables unset");
?>
<html>
    <head>
        <title>Questions</title>
    </head>
    <body>
        <link rel="stylesheet" href="stylesheet.css"/>
        <form action="score.php" method="post">
            <div id="question">
                <h3>Which of the following is not a framework of PHP?</h3>
                <ol>
                    <li><input type="radio" name="q1" value="a">CakePHP</li>
                    <li><input type="radio" name="q1" value="b">CodeIgniter</li>
                    <li><input type="radio" name="q1" value="c">Django</li>
                    <li><input type="radio" name="q1" value="d">None of these</li>
                </ol>
            </div>
            <div id="question">
                <h3>Which of the follwing is a correct way of declaring a variable in PHP?</h3>
                <ol>
                    <li><input type="radio" name="q2" value="a">$var_name</li>
                    <li><input type="radio" name="q2" value="b">__var_name__</li>
                    <li><input type="radio" name="q2" value="c">var_name</li>
                    <li><input type="radio" name="q2" value="d">All of the above</li>
                </ol>
            </div>
            <div id="question">
                <h3>Which of the following is a correct way of creating an indexed array in PHP?</h3>
                <ol>
                    <li><input type="radio" name="q3" value="a">$season=array("summer","winter","spring","autumn");    </li>
                    <li><input type="radio" name="q3" value="b">$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");    </li>
                    <li><input type="radio" name="q3" value="c">Both of the above</li>
                    <li><input type="radio" name="q3" value="d">None of these</li>
                </ol>
            </div>
            <div id="question">
                <h3>Which of the following is not a string function of PHP?</h3>
                <ol>
                    <li><input type="radio" name="q4" value="a">strtolower()</li>
                    <li><input type="radio" name="q4" value="b">strtoupper()</li>
                    <li><input type="radio" name="q4" value="c">isalphanum()</li>
                    <li><input type="radio" name="q4" value="d">strlen()</li>
                </ol>
            </div>
            <div id="question">
                <h3>Which of the following is a superglobal in PHP?</h3>
                <ol>
                    <li><input type="radio" name="q5" value="a">$_SESSION</li>
                    <li><input type="radio" name="q5" value="b">$_POST</li>
                    <li><input type="radio" name="q5" value="c">$_COOKIE</li>
                    <li><input type="radio" name="q5" value="d">All the above</li>
                </ol>
            </div>
            <input type="submit" value="Submit Quiz"/>
        </form>
    </body>
</html>