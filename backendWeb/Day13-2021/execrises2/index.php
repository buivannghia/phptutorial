<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
                integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
                integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
                crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <h1 class="text-white">Create an account</h1>
            <input class="form-control my-2" type="text" name="userName" placeholder="User Name" required>
            <input class="form-control my-2" type="email" name="email" placeholder="Email" required>
            <input class="form-control my-2" type="password" name="password" placeholder="Password" required>
            <input class="form-control my-2" type="password" name="confirmPassword" placeholder="Confirm Password" required>
            <small text-white>Select your avatar: </small><br>
            <input class="form-control my-2 bg-dark text-white" type="file" name="fileToUpload" id="fileToUpload" required>
            <button class="btn btn-primary text-white my-2" type="submit" name="submit">Register</button>
        </form>
    </div>
    <?php
    $Name = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    }
    function check_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $target_dir = "update/";
    $target_file = $target_dir . basename($_FILES["fileToupdate"]["name"]);
    $submit = 1;
    $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToupdate"]["tmp_name"]);
        if ($check !== false) {
            echo "<div class='container text-white'><h1>Check form: </h1>";
            echo "<img width='500px' height='300px' src='$target_file'><br>";
            echo "User Name: " . $Name . "</p>";
            echo "<p>Email: " . $email . "</p>";
            if ($password == $confirmPassword) {
                echo "<p>Password: " . $password . "</p>";
                echo "<p>Confirm Password: " . $confirmPassword . "</p>";
            } else {
                echo "<p class='text-danger'>Mat khau khong giong. Vui long nhap lai mat khau!</p>";
            }
            echo "<p>Tên file: " . $target_file . "</p>";
            echo "<p>Định dạng file: " . $check["mime"] . "</p></div>";
            $submit = 1;
        } else {
            echo "File is not an image.";
            $submit = 0;
        }
    }
    if (file_exists($target_file)) {
        $submit = 0;
    }
    if ($_FILES["fileToupdate"]["size"] > 500000000) {
        echo "Sorry, your file í too large.";
        $submit = 0;
    }
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "mp3" && $imageFileType != "mp4") {
        echo "Sorry, only JPG, JPEG, PNG, MP3, MP4 & GIF file are allowwed.";
        $submit = 0;
    }
    if ($submits == 0) {

    } else {
        if (move_uploaded_file($_FILES["fileToupdate"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileupdate"]["name"])) . "has been uploaded.";
        }
    }
    ?>
    </body>
</html>