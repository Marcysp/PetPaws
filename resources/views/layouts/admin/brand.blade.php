<h2>Brand Produk</h2>
<table>
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>Aksi</th>
    </tr>
    @foreach ($brand as $b)
    <tr>
        <td>{{$b->id}}</td>
        <td>{{$b->nama_brand}}</td>
        <td><button><a href="/brand/{{$b->id}}/edit">Edit</a></button>
        <td><button><a href="/brand/delete/{{$b->id}}">Delete</a></button>
    </tr>
    @endforeach
</table>

<form action="/brand/store" method="POST">
    @csrf
    <label for="">Nama Brand</label><br>
    <input type="text" name="nama_brand">
    <input type="submit" name="submit" value="Save">
</form>
