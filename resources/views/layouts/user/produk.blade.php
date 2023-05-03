<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>harga</th>
        </tr>
        @foreach ($produk as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nama_produk}}</td>
            <td>{{$p->harga}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
