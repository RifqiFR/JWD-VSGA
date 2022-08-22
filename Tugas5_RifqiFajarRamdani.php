<!DOCTYPE html>
<html lang="en">
<style>
    hr {
        border-bottom: 4px double #333;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <form name="form1" id="form1" method="post" action="">
        <label for="number1"> Bilangan 1 : </label>
        <input type="text" style="border:none" id="number1" name="number1" /><br>
        <label for="number2"> Bilangan 2 : </label>
        <input type="text" style="border:none" id="number2" name="number2" onkeydown="if(event.keyCode == 1){document.getElementById('form1').submit('submit');}" />
        <hr width="27%" align="left">
    </form>

</body>

</html>

<?php

// Fungsi Hitung Tambah
function plus($number1, $number2)
{
    $tambah = $number1 + $number2;
    return $tambah;
}

// Fungsi Hitung Penurangan
function minus($number1, $number2)
{
    $kurang = $number1 - $number2;
    return $kurang;
}

// Fungsi Hitung Perkalian
function multi($number1, $number2)
{
    $kali = $number1 * $number2;
    return $kali;
}

// Fungsi Hitung Pembagian
function devide($number1, $number2)
{
    $bagi = $number1 / $number2;
    return $bagi;
}

// Pengecekan terkirim
if (isset($_POST['number1']) && isset($_POST['number2'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    //memanggil fungsi
    echo "Hasil penjumlahan adalah : " . plus($number1, $number2) . "<br/>";
    echo "Hasil pengurangan adalah : " . minus($number1, $number2) . "<br/>";
    echo "Hasil perkalian adalah : " . multi($number1, $number2) . "<br/>";
    echo "Hasil pembagian adalah : " . devide($number1, $number2) . "<br/>";
}
?>