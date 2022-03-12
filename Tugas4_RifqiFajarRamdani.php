<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang Segitiga</title>
</head>
<body>
    <form action="" method="POST">
        Masukan Bintang <input type="text" name="bintang"><input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    //untuk menangkap inputan dari form html
    if(isset($_POST['submit'])){
        $bin = $_POST['bintang'];

    //untuk memanipulasi inputan yang diisi dalam bentuk * dan br
    for($a = 1; $a <= $bin; $a++){
        for($b = 1; $b <= $a; $b++){
            echo"*";
        }
        echo"<br>";
    }
    }
?>