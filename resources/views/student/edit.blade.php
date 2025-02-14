<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="{{ route('student.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" value="{{ $student->nim }}">
        <br><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $student->name }}">
        <br><br>
        <label for="prodi">Prodi</label>
        <input type="text" name="prodi" id="prodi" value="{{ $student->prodi }}">
        <br><br>
        <label for="angkatan">Angkatan</label>
        <input type="text" name="angkatan" id="angkatan" value="{{ $student->angkatan }}">
        <br><br>
        <label for="alamat">Alamat</label>
        <textarea type="text" name="alamat" id="alamat" rows="4">{{ $student->alamat }}</textarea>
        <br><br>
        <button type="submit" value="Simpan">Submit</button>
</body>
</html>