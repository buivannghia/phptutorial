<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Exercise </title>
    </head>

    <body class="bg-light text-dark">
        <?php
        function capitalize($str)
        {
            $text = explode(" ", $str);
            $textStr="";
            foreach ($text as $word){
                $textStr.=ucfirst($word)." ";
            }
            return $textStr;
        }
        ?>
        <div class="container text-center">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mx-auto mt-7">
                <input type="text" name="string" id="string" placeholder="Type Your String Here" class="form-control mb-5">
                <input type="submit" name="Capitalize" id="Capitalize" value="Capitalize" class="btn btn-primary">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo capitalize($_POST["string"]);
            }
            ?>
        </div>
    </body>

</html>