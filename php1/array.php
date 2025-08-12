<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Latihan Array</h1>
    <?php
    echo "<h3>Contoh soal 1</h3>";

    $trainer = ["Budi", "Dwi", "Abdul", "Thio", "Fikri", "Asep"];

    print_r($trainer);

    echo "<h3>Contoh soal 2</h3>";

    echo "Total Trainer : ". count($trainer);
    echo "<ul>";
    echo "<li>" . $trainer[0] . "</li>";
    echo "<li>" . $trainer[1] . "</li>";
    echo "<li>" . $trainer[2] . "</li>";
    echo "<li>" . $trainer[3] . "</li>";
    echo "<li>" . $trainer[4] . "</li>";
    echo "<li>" . $trainer[5] . "</li>";
    echo "</ul>";

    echo "<h3>Contoh soal 3</h3>";

    $bioTrainer = [
        ["id" => "001", "nama" => "Rezky", "Materi" => "Laravel"],
        ["id" => "002", "nama" => "Thio", "Materi" => "Phyton"],
        ["id" => "003", "nama" => "Fikri", "Materi" => "Desain Grafis"],
        ["id" => "004", "nama" => "Abdul", "Materi" => "Golang"],
        ["id" => "005", "nama" => "Bayu", "Materi" => "ReactJS"],
    ];

    echo "<pre>";
    print_r($bioTrainer);
    echo "</pre>";

    ?>
</body>
</html>