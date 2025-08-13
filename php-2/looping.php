<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Soal Looping</h1>
    <?php
    echo "<h3>Contoh Soal 1</h3>";

    echo "<h5>Looping 1</h5>";

    $i = 1;
    while($i<=19){
        echo "$i - Angka Ganjil <br>";
        $i += 2;
    }

    echo "<h5>Looping 2</h5>";

    $a=19;
    do {
        echo "$a - Angka Ganjil <br>";
        $a -= 2;
    } while ($a >= 1);

    echo "<h5>Looping 2</h5>";

    echo "<h3>Contoh Soal 2</h3>";


    $nilai = [76, 46,88,40,43,83];

    echo "Nilai : ";
    print_r($nilai);
    echo "<br>";

    foreach($nilai as $n){
        $item[] = $n % 3;
    }


    echo "Nilai modulus 2 : "; 
    print_r($item);
    echo "<br>";

    echo "<h3>Contoh Soal 3</h3>";

    $products = [
        ["001", "Kursi", 25],
        ["002", "Meja", 30],
        ["003", "Gelas", 15],
        ["004", "Spidol", 44],
        ["005", "Pensil", 52]
    ];

    foreach($products as $array){
        $output = [
            "id" => $array[0],
            "nama" => $array[1],
            "stok" => $array[2]
        ];
        print_r($output);
        echo "<br>";
    }

    echo "<h3>Contoh Soal 4</h3>";

    // looping 1 = 6
    // looping 2

    for($j=1; $j<=5; $j++){
        for($k=$j; $k<=5; $k++){
            echo " * ";
        }
        echo "<br>";
    }



    ?>
</body>
</html>