<?php
	$a=3;
	switch ($a) {
		case ($a==0):
			echo "Ngày thứ hai";
			break;
		case ($a==1):
			echo "Ngày thứ ba";
			break;
		case ($a==2):
			echo "Ngày thứ tư";
			break;
		case ($a==3):
			echo "Ngày thứ năm";
			break;
		case ($a==4):
			echo "Ngày thứ sáu";
			break;
		case ($a==5):
			echo "Ngày thứ bảy";
			break;
		case ($a==6):
			echo "Ngày Chủ nhật";
			break;		
		default:
			echo "Không hợp lệ";
			break;
	}
?>