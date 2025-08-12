<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Latihan PHP String</h1>
    <?php

    echo "<h3>Contoh Soal 1</h3>";
    $soal1 = "Selamat Datang di Sanbercode";
    echo "Kalimat Soal 1 : " . $soal1 . "<br>";
    echo "Panjang Kalimat Soal 1 : " . strlen($soal1) . "<br>";
    echo "Jumlah Kata Kalimat Sola 1 : " . str_word_count($soal1) . "<br>";

    echo "<h3>Contoh Soal 2</h3>";

    $soal2 = "Hai Hello World";
    echo "Kata 1 Soal 2 : " . substr($soal2,0,3) . "<br>";
    echo "Kata 2 Soal 2 : " . substr($soal2,4,5) . "<br>";
    echo "Kata 3 Soal 2 : " . substr($soal2,10) . "<br>";

    echo "<h3>Contoh Soal 3</h3>";

    $soal3 = "Lorem Ipsum is simply dummy text of the printing and 
    typesetting industry. Lorem Ipsum has been the industry's standard 
    dummy text ever since the 1500s, when an unknown printer took a galley 
    of type and scrambled it to make a type specimen book. It has survived not 
    only five centuries, but also the leap into electronic typesetting, remaining 
    essentially unchanged. It was popularised in the 1960s with the release of 
    Letraset sheets containing Lorem Ipsum passages, and more recently with 
    desktop publishing software like Aldus PageMaker including versions of 
    Lorem Ipsum.";

    echo "Kalimat Soal 3 : " . $soal3 . "<br>";
    echo "Ganti Kalimat Soal 3 : " . str_replace("Lorem", "Hai", $soal3);

    ?>
</body>
</html>