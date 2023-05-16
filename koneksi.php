<?php

$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "peminjaman_book";

$koneksi = new mysqli($server, $username, $password, $dbname);

if (!$koneksi){
    die("koneksi gagal". $koneksi->connect_error);
}