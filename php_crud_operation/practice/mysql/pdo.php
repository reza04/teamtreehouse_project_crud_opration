<?php


$db = new PDO("mysql:dbname=latihan;host:localhost","root","");


// $simpan=($db->query("inser into kelas values ('','SMA','IPA')"));

$simpan=$db->query("select * from kelas");

// $tampil=$simpan->fetch();

$tampil=$simpan->fetchAll(PDO::FETCH_OBJ);


// echo $tampil['kelas'];

var_dump($tampil);

class Tes{

    const HELLO='Hello';

}



?>