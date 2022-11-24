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
    <center>
        <h1>Enter numbar is odd or even</h1>
        <form method="post">
            <input type="text" name="num" placeholder="Enter numbar only..."><br><br>
            <input type="submit" name="chack" value="Check numbar"><br><br>
        </form>
        <?php
            if(isset($_POST['chack']))
            {
                $num=$_POST['num'];
                $arr=array('0'=>'even','1'=>'odd');
                
                echo "<b>your number is ".$num." and number is ".$arr[$num%2]."</b>";
            }
        ?>
    </center>
</body>
</html>