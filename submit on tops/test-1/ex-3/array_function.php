<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Array Function</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Array combine</h1>
    <?php
        $alph=array('a','b','c');
        $num=array('1','2','3');
        $com=array_combine($alph,$num);
        print_r($alph);
        echo "<br>";
        print_r($num);
        echo "<br><br>";
        print_r($com);
        echo "<br>";
    ?>
    <hr>
    <h1>Array merge</h1>
    <?php
        $alph=array('a','b','c');
        $num=array('1','2','3');
        $com=array_merge($alph,$num);
        print_r($alph);
        echo "<br>";        
        print_r($num);
        echo "<br><br>";
        print_r($com);
        echo "<br>";
    ?>
</body>
</html>