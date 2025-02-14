<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    @foreach ($products as $product)
    <p>ID: {{ $product->id}}</p>
    <p>CODE: {{ $product->code}}</p>
    <p>Nama: {{ $product->nama }}</p>
    <p>Deskripsi: {{ $product->deskripsi }}</p>
    <p>Quantity: {{ $product->qty }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Create: {{ $product->created_at }}</p>
    <p>Update: {{ $product->updated_at }}</p>
    @endforeach
</body>
</html>