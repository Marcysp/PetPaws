<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
</head>
<body>
    <button><a href="/produk/create">tambah produk</a></button>
    <table>
        <tr>
            <th>id</th>
            <th>Gambar</th>
            <th>nama</th>
            <th>harga</th>
            <th>Aksi</th>
        </tr>
        @foreach ($produk as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td><img src="{{asset($p->img)}}" alt=""></td>
            <td>{{$p->nama_produk}}</td>
            <td>{{$p->harga}}</td>
            <td><button><a href="/produk/{{$p->id}}/edit">Edit</a></button>
                <button><a href="/produk/delete/{{$p->id}}">Delete</a></button></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
