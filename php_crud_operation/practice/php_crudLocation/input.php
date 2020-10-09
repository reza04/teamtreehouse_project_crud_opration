<?php

include "connection.php";



$input=$db->exec("insert into daftar(nama,kota) values('".$_POST['nama']."','".$_POST['kota']."')");

if($input)
{
    header("Location:index.php");
}

