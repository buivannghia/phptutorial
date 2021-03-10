<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise2</title>
</head>
<body>
<form action="." method="post">
    <label for="#">Nhap so a: </label>
    <input name="checkNumber" type="number" placeholder="nhap so" required><br>
    <button type="submit">Kiem tra 2 So</button>
</form>
<?php
$showFirstNum = null;
$showLastNum = null;
$checkNumber = $_POST["checkNumber"];
    for ($firstNumber = 1; $firstNumber <= $checkNumber; $firstNumber++) {
        if($firstNumber % 2 == 0) {
            $showFirstNum .= "$firstNumber ";
        }else{
            $showLastNum .= "$firstNumber ";
        }
    }
    echo "So chan la: ".$showFirstNum."<br>";
    echo "So le la: ".$showLastNum;
?>
</body>
</html>