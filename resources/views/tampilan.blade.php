<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
</head>
<body>
    <header>
        <h1>Tampilan Melalui Routes</h1>
        <p>this is a view</p>
        <!-- 
        <p>Variabel yang diberi: nilai</p>
        <p>Variabel yang diberi: value </p> 
        -->
        <p>DATA MAHASISWA:</p>
        <ul>
            <li>Nama : {{$nama}}</li>
            <li>Asal Daerah : {{$asal_daerah}}</li>
            <li>Prodi : {{$prodi}}</li>
            <li>Angkatan : {{$angkatan}}</li>
        </ul>
    </header>
</body>
</html>