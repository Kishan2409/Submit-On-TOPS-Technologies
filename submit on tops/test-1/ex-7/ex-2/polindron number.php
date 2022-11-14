<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <form method="post">
        <input type="text" name="nu" placeholder="Enter number for check...">
        <input type="submit" name="ch" value="Check">
    </form>
    <br>
    <?php
        if(isset($_POST['ch']))
        {
            $nu=$_POST['nu'];
            $rv=strrev($nu);
            if($nu==$rv)
            {
                echo "Number is palindrome ".$nu;
            }
            else
            {
                echo "Number is not palindrome ".$nu;
            }
        }
    ?>
</body>
</html>