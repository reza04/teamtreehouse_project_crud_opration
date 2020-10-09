<?php

// echo date('d/m/Y',strtotime('tanggal pertama dibulan '));

// echo PHP_EOL;

// echo date('m/d/Y',strtotime('2 saturday'));
// echo " . ";
// echo date('d/m/Y',strtotime('-1 Saturday'));

// $date="32/32/2020 ";

// $result=explode("/",$date);

// echo strtotime("32/32/2020");

// var_dump(checkdate($result[1],$result[0],$result[2]));

$data=date_default_timezone_set('Asia/Jakarta');
$data=date('m/d/Y H:i:s');

echo $data;






?>