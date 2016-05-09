<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" type="text/css" href="Css/style.css">


    </head>

    <body>
        <div class="wrapper">
            <div id ="headr">

                
                <img id ="logo"class="images" src="images/logo1.png" alt="logo"/>
                <h1 class="ptitle">Movies</h1>

                <div class="clear"></div>

                <ul class="nav">
                    

                    <li class="navItem"><a href="index.php"> Home </a></li><!--
                    --><?php if ($title == 'search'){?><li class="navItem"><a class ="active" href="search.php"> Search Movies </a></li>
                    <?php } else {?> <li class="navItem"><a href="search.php"> Search Movies </a></li> <?php } ?><!--
                    
                    --><?php if ($title == 'about us'){?><li class="navItem"><a class ="active" href="aboutus.php"> About Us </a></li>
                    <?php } else {?> <li class="navItem"><a href="aboutus.php"> About Us </a></li> <?php } ?><!--
                    
                    --><?php if ($title == 'Regestration Page'){?><li class="navItem"><a class="active" href="regesteration.php"> Register </a></li>
                     <?php } else {?> <li class="navItem"><a href="regesteration.php"> Register </a></li>  <?php } ?><!--
                    
                     --><?php if ($title == 'login'){?><li class="navItem" id="loginP"><a class ="active" href="login.php"> Login </a></li>
                    <?php } else {?> <li class="navItem" id="loginP"><a href="login.php"> Login </a></li><?php } ?>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
