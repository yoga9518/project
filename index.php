<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
        <link href="asset/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!--        <link href="asset/css/demo.css" rel="stylesheet" type="text/css"/>-->
        <link href="asset/css/flat-ui.css" rel="stylesheet" type="text/css"/>
        <script src="asset/js/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="asset/js/flat-ui.min.js" type="text/javascript"></script>
        <link href="config/style.css" rel="stylesheet" type="text/css"/>
        <title>Belajar PHP</title>
    </head>
    <body>
        <div class="container"> 
            <?php
            
//            include 'config/koneksi.php';
            session_start();
//          var_dump($_SESSION);
            include 'menu.php';
            
            if (isset($_SESSION["login"])) {
                echo "anda berhasil login";
                echo '<a href="logout.php" class="btn btn-lg btn-danger">logout</a>';
            }
            else 
                {
                include 'login.php';
            }

            // put your code here
            ?>
        </div>
    </body>
</html>
