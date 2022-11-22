<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ex-1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
<?php
    if(isset($_POST["sub"]))
    {
        $phy=$_POST["Physics"];
        $che=$_POST["Chemistry"];
        $bio=$_POST["Biology"];
        $mat=$_POST["Mathematics"];
        $com=$_POST["Computer"];
        
        if($phy<='100' && $che<='100' && $bio<='100' && $mat<='100' && $com<='100')
        {
            $total=$phy+$che+$bio+$mat+$com;
            $pr=$total/5;
            echo '::Your Result ::<br><br><hr>'.'Physics:: '.$phy.'</br>'
            .'Chemistry:: '.$che.'</br>'
            .'Biology:: '.$bio.'</br>'
            .'Mathematics:: '.$mat.'</br>'
            .'Computer:: '.$com.'</br></br><hr>'
            .':: Grand Total is :: '.$total.'</br>'
            .':: PR is :: '.$pr.'</br></br><hr>' ;
            if($pr>=90)
            {
                echo 'Your Gread is :: A ::</br><hr>';
            }
            elseif($pr>=80)
            {
                echo 'Your Gread is :: B ::</br><hr>';
            }
            elseif($pr>=70)
            {
                echo 'Your Gread is :: C ::</br><hr>';
            }
            elseif($pr>=60)
            {
                echo 'Your Gread is :: D ::</br><hr>';
            }
            elseif($pr>=50)
            {
                echo 'Your Gread is :: E ::</br><hr>';
            }
            else
            {
                echo 'Sorry You Are Fail Beter Luck Next Time....</br><hr>';
            }
        }
        else
        {
            echo"Pls Enter marks under 100.</br><hr>";
        }
    }
 
    ?>
<center>
        <form method="post">
            <h1>Enter Marks And Get Result.....</h1>
            Physics::       <input type="text" name="Physics" placeholder="Enter Marks Physics"><br><br>
            Chemistry::     <input type="text" name="Chemistry" placeholder="Enter Marks Chemistry"><br><br>
            Biology::       <input type="text" name="Biology" placeholder="Enter Marks Biology"><br><br>
            Mathematics::   <input type="text" name="Mathematics" placeholder="Enter Marks Mathematics"><br><br>
            Computer::      <input type="text" name="Computer" placeholder="Enter Marks Computer"><br><br>
            <input type="submit" name="sub" value="Get Result">
        </form>
</center>
    
</body>
</html>
