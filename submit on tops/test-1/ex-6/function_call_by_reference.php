
<html>
    <body>
    <form method="post">
        <input type="submit" name="show" value="Show Text"> 
    </form>

    <?php
    if(isset($_POST['show']))
    {
        function show(&$a){
            $a.='hello';
        }
        show($b);
        echo $b;
    }    
    ?>
    </body>
</html>