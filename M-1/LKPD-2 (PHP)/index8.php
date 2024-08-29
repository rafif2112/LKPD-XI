<?php 
$data = ["PPLG", "HTL", "KLN", "PMN", "pplg", "kln"];

// cek apakah data "pplg", "kln", "pmn", "htl" ada di dalam array
if (in_array("pplg", $data) || in_array("kln", $data) || in_array("pmn", $data) || in_array("htl", $data)) {
    //hapus data "pplg", "kln", "pmn", "htl"
    $data = array_diff($data, ["pplg", "kln", "pmn", "htl"]);
    print_r($data);
} else {
    echo "Tidak ada data duplikat";
}
?>
