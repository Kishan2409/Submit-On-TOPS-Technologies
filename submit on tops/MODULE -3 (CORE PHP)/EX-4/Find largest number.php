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
        <input type="text" name="n1" placeholder="Enter number 1">
        <input type="text" name="n2" placeholder="Enter number 2">
        <!-- <input type="text" name="n3" placeholder="Enter number 3"> -->
        <input type="submit" name="ch" value="check largest number">
    </form>
    <?php
    if(isset($_POST['ch']))
    {
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        //$n3=$_POST['n3'];
        echo "<br>Number 1 is $n1<br>Number 2 is $n2<br>";
        echo ($n1>$n2)?("Number 1 is::$n1 largest number "):("Number 2 is::$n2 largest number");
    }
    ?>
</body>
</html>