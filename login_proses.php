<?php 
include 'config/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login      = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
$data       = mysqli_num_rows($login);
if($data>0)
{
    $user = mysqli_fetch_array($login);
    session_start();
    
    $_SESSION['login'] = $user['username'];
    header("location:index.php");
}
else
{
    
}