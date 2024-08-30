<?php 
$data = ["PPLG", "HTL", "KLN", "PMN", "pplg", "kln"];

$jurusan = array_map("strtoupper", $data);
$duplikat = array_unique($jurusan);
print_r($duplikat);
?>