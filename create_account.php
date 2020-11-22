<html>
    <head>
        <title>
            Create Account
        </title>
    </head>
    <body>
        <link rel="stylesheet" href="stylesheet.css"/>
        <h1 id="website_heading">Quizmaster</h1>
        <center>
            <form action="create_account.php" method="post">
                <table id="accountform">
                    <tr>
                        <td style="padding-bottom: 1em;" colspan=2>-CREATE ACCOUNT-</td>
                    </tr>
                    <tr>
                        <td>First Name: </td>
                        <td><input type="text" name="fname"></td>
                    </tr>
                    <tr>
                        <td>Last Name: </td>
                        <td><input type="text" name="lname"></td>
                    </tr>
                    <tr>
                        <td>E-mail: </td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Username: </td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td style="padding-top:3em;"><input type="submit" value="Create Account"></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
<?php
  if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['password']))
    {
        $conn=mysqli_connect("localhost",'root',"","user_db");
        if($conn)
        {
            $username=$_POST['username'];
            $email=$_POST['email'];
            $query="SELECT * FROM user_info WHERE username='$username'";
            $query2="SELECT * FROM user_info WHERE username='$email'";
            $result=mysqli_query($conn,$query);
            $result2=mysqli_query($conn,$query2);
            if(mysqli_num_rows($result)>0)
            {
                echo("<center>Sorry, you cannot have $username as your username.\n</center>");
                echo("<center>Try creating an account with another username\n</center>");
            }
            if(mysqli_num_rows($result2)>0)
            {
                echo("<center>This email has already an account linked with it.</center>");
            }
            else
            {
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $email=$_POST['email'];
                $query="INSERT INTO user_info VALUES ('$fname','$lname','$username','$password','$email')";
                $result=mysqli_query($conn,$query);
                if($result)
                    header("Location:verified.php");
                else echo("<center>An error occured while creating your account".mysqli_error($conn)."</center>");
            }
        }
        else echo("Could not establish connection with the database\n");
    }
    else echo("<center>Please fill in all the details\n</center>");
?>