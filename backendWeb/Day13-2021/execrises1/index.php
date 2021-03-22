<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label>Select image to upload:</label>
        <input class="form-control" type="file" name="fileToupdate" id="fileToupdate">
        <small>Only jpg,jpeg,png,,mp3,mp4 and gif file with maximum size of 1 MB is allowed.</small><br>
        <button class="btn btn-primary text-white" type="submit" name="submit">Upload</button>
    </form>
    <?php
        $target_dir = "update/";
        $target_file = $target_dir . basename($_FILES["fileToupdate"]["name"]);
        $submit = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToupdate"]["tmp_name"]);
            if($check !== false) {
                echo "file is an image - " . $check["mime"] . ".";
                echo "<img width='300px' height='300px' src='$target_file'><br>";
                echo "<p>Tên file: </p>".$target_file;
                echo "<p>Định dạng file: </p>".$check["mime"];
                $update= 1;
            }else {
                echo "File is not an image.";
                $update = 0;
            }
        }

        if(file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $update = 0;
        }
       
        if($_FILES["fileToupdate"]["size"] > 500000000) {
            echo "Sorry, your file í too large.";
            $update = 0;
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "mp3" && $imageFileType != "mp4") {
            echo "Sorry, only JPG, JPEG, PNG, MP3, MP4 & GIF file are allowwed.";
            $update = 0;
        }
        if($update== 0) {
            echo "Sorry,your file was not uploaded.";
        }else {
            if(move_uploaded_file($_FILES["fileToupdate"]["tmp_name"],$target_file)) {
                echo "The file ". htmlspecialchars( basename($_FILES["fileToupdate"]["name"])). "has been uploaded.";
            }
        }
    ?>
</body>
</html>