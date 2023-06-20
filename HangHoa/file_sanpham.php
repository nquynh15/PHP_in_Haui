<?php
$mahang = $_POST['mahang'];
$tenhang = $_POST['tenhang'];
$nhomhang = $_POST['nhomhang'];
$soluong = $_POST['soluong'];
$dongia = $_POST['dongia'];
$hinhanh = $_POST['hinhanh'];

$file = 'hang.txt';
if(file_exists($file)) {
    $w = fopen($file, 'a');
}
else {
    $w = fopen($file, 'w');
}
fwrite($w, $mahang . "|" . $tenhang . "|" . $nhomhang . "|" . $soluong . "|" . $dongia . "|" . $hinhanh . "\n");
fclose($w);
header("location: hienThiSP.php");
?>