<?php
$manhom = $_POST['manhom'];
$tenhang = $_POST['tennhom'];
$mota = $_POST['mota'];

$file = 'category.txt';
if(file_exists($file)) {
    $w = fopen($file, 'a');
}
else {
    $w = fopen($file, 'w');
}
fwrite($w, $manhom . "|" . $tenhang . "|" . $mota . "\n");
fclose($w);
header("location: form_sanpham.php");
?>