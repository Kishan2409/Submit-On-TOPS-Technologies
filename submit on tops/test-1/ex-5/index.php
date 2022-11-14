
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    </head>
    <body>
        <div class="container-fluid mt-1 bg-black">
            <div class="container-fluid text-white he">
                <?php
                    require_once('header.php');
                ?> 
            </div>
            <div class="container-fluid text-white me">
                <?php
                    require_once('main.php');
                ?> 
            </div>
            <div class="container-fluid text-white fo">
                <?php
                    require_once('footer.php');
                ?> 
            </div>
        </div>
    </body>
</html>
