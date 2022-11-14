<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sessionstart()</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php

        if(isset($_POST['sub']))
        {
                        
            $nm=$_POST['nm'];
            $pass=$_POST['pass'];
            if($nm=='kishan'&&$pass='123')
            {
                session_start();

                $_SESSION['nm']=$_POST['nm'];
                header('location:welcome.php');

            }
            else
            {
                echo "pls check username and password";
            }
        }
    ?>
    <form method="post">
        <input type="text" name="nm" placeholder="Enter User name...." required>
        <input type="password" name="pass" placeholder="Enter password name...." required>
        <input type="submit" name="sub" value="Login">
    </form>
</body>
</html>