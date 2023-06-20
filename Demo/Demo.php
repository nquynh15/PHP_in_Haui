<?php
    $a = array(1, 6, 2, 9, 3, 5);
    sort($a);

    for($i=0; $i<count($a); $i++){
        echo "$a[$i]\t";
    }
    echo '<br/>';
    rsort($a);
    for($i=0; $i<count($a); $i++){
        echo "$a[$i]\t";
    }
?>