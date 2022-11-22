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
        <input type="text" name="y" placeholder="Enter year to check leap year or not"><br>
        <input type="submit" name="ch">
    </form>
    <?php
    if(isset($_POST['ch']))
    {
        $y=$_POST['y'];
        if ($y % 400 == 0)
        {
            echo $y." is a leap year.";
        } 
        elseif ($y % 100 == 0)
        {
            echo $y." is not a leap year.";
        } 
        elseif ($y % 4 == 0) 
        {
            echo $y." is a leap year.";
        } 
        else 
        {
            echo $y." is not a leap year.";
        }
    }
    else
    {
        echo "enter 4 digit number only";
    }
    ?>
</body>
</html>