<?php

//Author Yoga Setiawan

$server = "localhost";
$user = "root";
$password = "";
$database = "lesson";

$koneksi = mysql_connect($server,$user,$password,$database);

if($koneksi)
{
    echo "Selamat anda berhasil berhasil";
}
