<?php
	$a =300;
	$b;
	if($a<101){
		$b=$a*450;
	}
	elseif (101<=$a&&$a<=200){
		$b=$a*600;
	}
	elseif (201<=$a&&$a<=300){
		$b=$a*750;
	}
	elseif (301<=$a&&$a<=500){
		$b=$a*900;
	}
	elseif (501<=$a&&$a<=1000){
		$b=$a*1000;
	}
	elseif ($a>1000){
		$b=$a*1200;
	}
	echo 'Số tiền điện phải nộp tương ứng với '.$a.'(KW)'.' trước khi tính thuế VAT là: '.$b.'D';
	echo '<br/><br/>Số tiền điện phải nộp tương ứng với '.$a.'(KW)'.' sau khi tính thuế VAT là: '.(($b*10)/100).'D';
?>  
