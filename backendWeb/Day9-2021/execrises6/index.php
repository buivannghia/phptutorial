<?php
    $s = null;
    $sum = null;
    for($i = 1;$i < 50;$i++) {
        $s .= "$i-";
        if($i == 49){

        $s .= $i + 1;
        }
}
    echo $s;
?>