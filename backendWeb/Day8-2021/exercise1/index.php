<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise1</title>
</head>
<body>
<form action="." method="post">
    <label for="#">Nhap so a: </label>
    <input name="firstNumber" type="number" placeholder="nhap so" required><br><br>
    <label for="#">Nhap so b: </label>
    <input name="lastNumber" type="number" placeholder="nhap so" required><br><br>
    <button type="submit">Tinh Tong 2 So</button>
</form>
<?php
$firstNum = $_POST["firstNumber"];
$lastNum = $_POST["lastNumber"];
if ($firstNum == $lastNum) {
    echo(($firstNum + $lastNum) * 3);
} else {
    echo($firstNum + $lastNum);
}
?>
</body>
</html>