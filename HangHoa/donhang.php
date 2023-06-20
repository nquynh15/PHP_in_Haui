<?php
session_start();

$tong = 0; 
foreach($_SESSION['giohang'] as $key => $value) {
        foreach($value as $k => $v) { 
        $thanhtien = $v[1] * $v[2]; 
        $tong += $thanhtien;
        $file2 = 'chitietdonhang.txt';
        if(file_exists($file2)) {
            $w2 = fopen($file2, 'a');
        }
        else {
            $w2 = fopen($file2, 'w');
        }
        fwrite($w2, $_SESSION['stt'] . "|" . $k . "|" . $v[0] . "|" . $v[1]. "|" . $v[2] . "\n");
        fclose($w2);
        }
    }
date_default_timezone_set('Asia/Ho_Chi_Minh');
$file1 = 'donhang.txt';
if(file_exists($file1)) {
    $w1 = fopen($file1, 'a');
}
else {
    $w1= fopen($file1, 'w');
}
fwrite($w1, $_SESSION['stt'] . "|" . date('d/m/Y H:i:s') . "|" . $tong . "\n");
fclose($w1);


$_SESSION['stt'] = $_SESSION['stt'] + 1;

unset($_SESSION['giohang']);
header("location: hienThiSP.php");
?>