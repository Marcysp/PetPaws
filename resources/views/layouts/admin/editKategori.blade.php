<h2>Edit Kategori</h2>

<form action="/kategori/{{$kategori->id}}" method="POST">
    @method('put')
    @csrf
    <label for="">Nama Kategori</label><br>
    <input type="text" name="nama_kategori" value="{{$kategori->nama_kategori}}"><br>
    <input type="submit" name="submit" value="Update">
</form>
