<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Perhitungan Luas Persegi</h2>
    <?php
        // $panjang = 20;
        // $lebar = 10;
        // $luas = $panjang * $lebar;
        // echo "Luasnya adalah : ".$luas;

        // $pi = 3.14;
        // $jari = 20;
        // $keliling = 2 * $pi * $jari * $jari;
        // $luasLingkaran = $pi * $jari * $jari;
        // echo "<br>";
        // echo "Luasnya lingkarannya adalah : ".$luasLingkaran;
        // echo "<br>";
        // echo "Keliling lingkarannya adalah : ".$keliling;
        $panjang = $_GET['panjang'];
        $lebar = $_GET['lebar'];
        $luas = $panjang * $lebar;
        echo "Luasnya Adalah : ".$luas;
        
		echo "<br>";
        echo "<h2>Luas Segitiga</h2>";
        $alas = $_GET['alas'];
        $tinggi = $_GET['tinggi'];
        $luass = 0.5 * $alas * $tinggi;
		echo "<br>";
        echo "Luas Segitiga Adalah : ".$luass;
		
		echo "<h2>Kelilin Segitiga</h2>";
		$sisi1 = $_GET['sisi1'];
		$sisi2 = $_GET['sisi2'];
		$sisi3 = $_GET['sisi3'];
        $keliling = $sisi1 + $sisi2 + $sisi3;
        echo "<br>";
        echo "Keliling Segitiga Adalah : ".$keliling;

        echo "<h2>Lingkaran</h2>";
        $jari = $_GET['jari'];
        $keliling = 2 * 3.14 * $jari * $jari;
        $luasLingkaran = 3.14 * $jari * $jari;
        echo "Keliling Lingkaran Adalah : ".$keliling;
        echo "<br>";
        echo "Luas Lingkaran Adalah : ".$luasLingkaran;
        

    ?>

</body>
</html>