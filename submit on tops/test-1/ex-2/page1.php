<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php

        if(isset($_POST['np']))
        {
            echo "wait 4 second";
            header('refresh:4,page2.php');
        }
    ?>
<h1>This is Page1 </h1>
    <form method="post">
        <input type="submit" name="np" value="Next Page">
    </form>
</body>
</html>