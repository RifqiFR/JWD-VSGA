<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganji dan Genap</title>
</head>
<body>
        <?php
        echo "<p>======== CETAK BILANGAN GANJIL GENAP 1 - 100 ========</p>";
        // Melakukan perulangan 1 - 100
        for($no=1;$no<=100;$no++){
            // Cek bilangan ganjil atau genap
            if($no % 2 == 0){
                echo "$no adalah Bilangan Genap.<br>";
            }
            else{
                echo "$no adalah Bilangan Ganjil.<br>";
            }
        }
    ?>
</body>
</html>