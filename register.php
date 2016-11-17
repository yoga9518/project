<?php 
include "index.php";
?>
<div class="col-md-4"></div>
<div class="col-md-4">
    <form class="login-form" action="login_proses.php" method="post">
        <div class="form-group" align="center">
        <input class="form-control login-field" type="text" name="username" placeholder="username">
        <label class="login-field-icon fui-user" for="login-name"></label>
        </div>
        <div class="form-group" align="center">
        <input class="form-control login-field" type="password" name="password" placeholder="password">
        <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>
        <div class-="form-group" align="center">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
        <button class="btn btn-primary btn-lg btn-block" type="reset" name="submit">reset</button>
        <a class="login-link" href="#">Register</a>
        </div>
    </form>
</div>
<div class="col-md-4"></div>



<!--
<form methot="post" action="register_proses.php">
    <table>
        <tr>
            <td>username : <input type="text" name="username"/></td>
        </tr>
        <tr>
            <td>password : <input type="text" name="password"/> </td>
        </tr>
        <tr>
            <td><button type="submit" value="simpan">Simpan</button></td>
        </tr>
    </table>
</form>-->
