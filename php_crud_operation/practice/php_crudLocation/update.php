<?php

include 'connection.php';

$update=$db->exec("update daftar set nama='".$_POST['nama']."',kota='".$_POST['kota']."' where id=".$_POST['id']);

if($update)
{
    header("Location:index.php");
}


// var_dump($_POST);

?>