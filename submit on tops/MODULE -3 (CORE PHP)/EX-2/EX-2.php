<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>EX-2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post">
        <input type="date" name="da">
        <input type="submit" name="sub" value="Submit date">
    </form>
    
    <?php   
    if(isset($_POST['sub']))
    {
        $da=$_POST['da'];
        echo $da."<br>";
            
    }     
    ?>
</body>
</html>