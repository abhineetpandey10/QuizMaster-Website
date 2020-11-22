<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <link rel="stylesheet" href="stylesheet.css"/>
        <h1 id="website_heading">Quizmaster</h1>
        <center>
        <form action="index.php" method="post">
            <table id="loginform">
                <tr>
                    <td colspan=2 style="padding-bottom:1em;">-Login-</td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr><td style="padding-top:1em;"></td></tr>
                <tr><td><input type='submit' value='Login'/></td></tr>
                <tr><td style="padding-top:2em;"></td></tr>
                <tr>
                    <td colspan=2><a href="create_account.php">Not having an Account? Create Account</td>
                </tr>
                <tr>
                    <td colspan=2 style="text-align:left"><a href="forgot_password.php">Forgot Password</td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>
<?php
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn=mysqli_connect("localhost","root","","user_db");
    if($conn)
    {
        $result=mysqli_query($conn,"SELECT * FROM user_info WHERE username='$username' AND user_password='$password'");
        if(mysqli_num_rows($result)>0)
        {
            header("Location:start_quiz.php");
        }
        else die("<center>Invalid Credentials\n</center>");
    } 
    else die("<center>Failed to connect to database</center>");
}
//else die("Please fill in all details");
?>