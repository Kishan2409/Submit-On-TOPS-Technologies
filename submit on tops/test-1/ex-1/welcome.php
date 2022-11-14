<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>welcomepage</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Login Successfully....</h1>
    <h2>Session start...</h2>
    <form method="post">
        
        <?php
        session_start();
        echo $_SESSION['nm']."</br></br>";
        if($_SESSION['nm']=='kishan')
        {
            echo "<input type='submit' name='sub' value='Logout'>";
            if(isset($_POST['sub']))
            {
                unset($_SESSION['nm']);
                session_destroy();
                header('location:login.php');
            }      
        }
        ?>
        </form>
    
</body>
</html>