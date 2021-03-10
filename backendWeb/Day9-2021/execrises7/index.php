<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<table>
    <?php
    for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 8; $j++) {
            if ($i % 2 == 0 && $j % 2 == 1) {
                echo "<td class='bg-black'></td>";
            } elseif ($i % 2 == 1 && $j % 2 == 0) {
                echo "<td class='bg-black'></td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>