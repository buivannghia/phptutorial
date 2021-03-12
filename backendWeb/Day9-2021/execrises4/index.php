<?php
	$S=0;
	$M=0;
	for($i=1;$i<=100;$i++){
		$S+=$i;
		$M+=$i*$i;
	}
	echo "Tổng 100 số nguyên đầu tiên là: ".$S;
	echo "<br/>Tổng bình phương 100 số nguyên đầu tiên là: ".$M;
?>
<?php
	$S=0;
	$M=0;
	for($i=1;$i<=100;$i++){
		$S+=$i;
		$M+=$i*$i;
		if($i==50){
			break;
		}
	}
	echo "<br/>Tổng các số nguyên đầu tiên khi biến đếm đạt đến giá trị 50 là: ".$S;
	echo "<br/>Tổng bình phương các số nguyên đầu tiên khi các biến đếm đạt giá trị 50 là: ".$M;
?>