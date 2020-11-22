<?php 

$data = file_get_contents('latihan3.json');
$mahasiswa = json_decode($data,true);

var_dump($mahasiswa);
