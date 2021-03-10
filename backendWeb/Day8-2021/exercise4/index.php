<?php
    $MSP = "EV2009";
    $tensanpham = "Tam hop kim nho ngoai troi";
    $soluongsp = 500;
    $dongia = 160000;
    $soVAT = 0.05;
    echo "Ma san pham la: ".$MSP."<br>";
    echo "Ten san pham la: ".$tensanpham.".<br>";
    echo "So luong la: ".$soluongsp."<br>";
    echo "Don gia la: ".$soVAT."<br>";
    echo "San pham truoc khi tru the VAT la: ".($soluongsp * $dongia)."<br>";
    echo "San pham sau khi tru thue VAT la: ".($soluongsp * $dongia * $soVAT);
?>