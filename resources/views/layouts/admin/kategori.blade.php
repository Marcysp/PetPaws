<h2>Kategori Produk</h2>
<table>
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>Aksi</th>
    </tr>
    @foreach ($kategori as $k)
    <tr>
        <td>{{$k->id}}</td>
        <td>{{$k->nama_kategori}}</td>
        <td><button><a href="/kategori/{{$k->id}}/edit">Edit</a></button>
        <td><button><a href="/kategori/delete/{{$k->id}}">Delete</a></button>
    </tr>
    @endforeach
</table>

<form action="/kategori/store" method="POST">
    @csrf
    <label for="">Nama Kategori</label><br>
    <input type="text" name="nama_kategori">
    <input type="submit" name="submit" value="Save">
</form>
