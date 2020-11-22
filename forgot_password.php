<html>
    <head>
        <title>Forgot Password</title>
    <head>
    <body>
        <link rel="stylesheet" href="stylesheet.css"/>
        <h1 id="website_heading">Quizmaster</h1>
        <center>
            <form action="forgot_password.php" method="post" id="forgot" style="width:fit-content;">
                <h3 style="padding-bottom:2em;">Please enter your E-mail id here</h3>
                <br/>
                <input type="email" name="email_id">
                <br/><br/>
                <input type="submit" value="Submit">
            </form>
        </center>
    </body>
</html>
<?php
    if(isset($_POST['email_id']))
    {
        $conn=mysqli_connect("localhost","root","","user_db");
        if($conn)
        {
            $email=$_POST['email_id'];
            $query="SELECT * FROM user_info WHERE email='$email'";
            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result)==0)
                echo("<center>No account exits for this E-mail ID. Please enter a valid Email-ID</center>");
            else 
            {
                $query="INSERT INTO forgot VALUES('$email')";
                $result=mysqli_query($conn,$query);
                header("Location:req_received.php");
            }
        }
        else
            echo("<center>Failed to connect to the database</center>");
    }
    else echo("<center>Please fill in all the details</center>");
?>