<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="asset/css/flat-ui.min.css" rel="stylesheet" type="text/css"/>
        <script src="asset/js/flat-ui.min.js" type="text/javascript"></script>
        <title>Belajar PHP</title>
    </head>
    <body>
        <h3>Selamat datang di sistem ini</h3>
        <?php
        include 'config/koneksi.php';
        session_start();
        var_dump($_SESSION);
        if(isset($_SESSION["login"]))
        {
            echo "anda berhasil login";
            echo '<a href="logout.php" class="btn btn-lg btn-danger">logout</a>';
        }
        else
        {
            include 'login.php';   
        }
        
        // put your code here
        ?>
    </body>
</html>
