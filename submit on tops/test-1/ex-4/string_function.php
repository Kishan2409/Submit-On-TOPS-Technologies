<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>String Function</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
     
<h1>Srting Function</h1>

    <form method="post">
    <input type="text" name="st" placeholder="Enter String" required>
    <input type="submit" name="shu" value="Shuffle Your String">
    </form><br>
    <?php
        if(isset($_POST['shu']))
        {
            $st=$_POST['st'];
            $s=str_shuffle($st);
            echo "Your String is :: ".$st."<br><br> Shuffle Your String ::".$s;
        }
    ?>  
</body>
</html>