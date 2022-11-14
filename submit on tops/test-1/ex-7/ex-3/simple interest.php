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
    <input type="text" name="rs" placeholder="Enter Amount" ><br>
    <input type="text" name="r" placeholder="Enter Rate" ><br>
    <input type="text" name="n" placeholder="Enter Time" ><br>
    <input type="submit" name="si" value="Check simple interest"><br>
    <input type="submit" name="ci" value="Check Compund interest"><br>
    </form>
    <?php
    if(isset($_POST['si']))
    {
        $rs=$_POST['rs'];
        $r=$_POST['r'];
        $n=$_POST['n'];
        $sim=$rs*$r*$n/100;
        echo "Simple Interest is ::".$sim."</br>";
    }
    if(isset($_POST['ci']))
    {
        $rs=$_POST['rs'];
        $r=$_POST['r'];
        $n=$_POST['n'];
        $com=$rs*pow((1+$r/100),$n);
        $f=$com-$rs;
        echo "Compund Interest is ::".$f."</br>";
    }
    ?>
</body>
</html>