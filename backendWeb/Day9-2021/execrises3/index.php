<?php
 	$x = 1;
 	$sum = null;
 	$chiahet = null;
 	while ($x <= 100) { 
 		$sum += $x;
 		$x++;
 		if($x >= 20 and $x <= 50){
 		if($x % 3 == 0){
 			$chiahet .= "$x ";
 		}
 		}
 	}
 	echo " Tổng các số nguyên từ 1-100 là:".$sum."<br>";
 	echo " Các số chia hết cho 3 trong khoảng từ 20-50 là:".$chiahet;
?>