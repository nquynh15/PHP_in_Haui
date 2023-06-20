<?php
session_start();
if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
$masp = $_GET['ma'];
$arr = array();
$file = 'hang.txt';
if(file_exists($file)) {
    $r = fopen($file, 'r');
    while(!feof($r)) {
        $row = fgets($r);
        if($row != null) {
            $arr[] = explode("|", $row);
        }
    }
    fclose($r);
}
else {
    echo "File d
    on't exists";
}
$fl = 0;
$soluong = 1;

for($i = 0; $i < count($_SESSION['giohang']); $i++) {
    if(key($_SESSION['giohang'][$i]) == $masp) {
        $fl++;
        $soluongnew = $soluong + $_SESSION['giohang'][$i][$masp][1];
        $_SESSION['giohang'][$i][$masp][1] = $soluongnew;
        
    }
}
if($fl == 0) {
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i][0] == $masp) {
            $tenhang = $arr[$i][1];
            $dongia = $arr[$i][4];
        }
    }
    $arr_giohang = array($masp => array($tenhang, $soluong, $dongia));
    $_SESSION['giohang'][] = $arr_giohang;
}
//echo key($_SESSION['giohang'][1]);
//print_r($_SESSION['giohang'][0][$masp][1]);
//session_destroy();
header("location: hienThiSP.php");
?>