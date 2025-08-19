<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Pendaftaran</h1>
    <form action="/kirim" method="POST">
        @csrf
        <label >Full Name</label> <br>
        <input type="text" name="fullname" > <br> <br>
        <label >Usia</label> <br>
        <input type="number" name="age"> <br> <br>

        <input type="submit" value="daftar">
    </form>
</body>
</html>