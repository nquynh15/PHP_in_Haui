<?php
    $old = $_POST['old'];
    $new = $_POST['new'];
    $c = $new - $old;
    $m;
    if($c<=50){
        $m = $c*1678;
    }
    elseif($c<=100){
        $m = (50*1678 + ($c-50)*1734) * 1.1;
    }
    elseif($c<200){
        $m = (50*1678 + 50*1734 + ($c-100)*2014) * 1.1;
    }
    else {
        $m = (50*1678 + 50*1734 + 100*2014 + ($c-200)*2536) * 1.1;
    }

    echo "Tien phải trả: $m VND";
?>