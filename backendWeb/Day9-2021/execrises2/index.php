<?php
	$arr=[2,6,9,25,34,70];
	echo "Số lớn nhất của mảng là: ".max($arr).';';
	echo "<br/>Số nhỏ nhất của mảng là: ".min($arr).';';
	echo "<br/>Trung bình cộng các phần tử trong mảng là: ".(array_sum($arr)/count($arr));
?>