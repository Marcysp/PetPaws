<h2>edit data</h2>

<form action="/produk/{{$produk->id}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <select class="form-select" aria-label="Default select example" name="produk_kategori_id">
        <option selected>Kategori Produk</option>
        @foreach ($kategori as $k)
        <option value="{{$k->id}}" @if ($produk->produk_brand_id == $k->id) selected @endif>{{$k->nama_kategori}}</option>
        @endforeach
      </select><br>
    <select class="form-select" aria-label="Default select example" name="produk_brand_id">
        <option selected>Brand Produk</option>
        @foreach ($brand as $b)
        <option value="{{$b->id}}" @if ($produk->produk_brand_id == $b->id) selected @endif>{{$b->nama_brand}}</option>
        @endforeach
      </select><br>

      <label for="">Nama Produk</label><br>
    <input type="text" name="nama_produk" value="{{$produk->nama_produk}}"><br>
    <label for="">Harga</label><br>
    <input type="text" name="harga" value="{{$produk->harga}}"><br>
    <label for="">deskripsi</label><br>
    <textarea name="deskripsi" cols="30" rows="5">{{$produk->deskripsi}}</textarea><br>
    <label for="">Gambar</label><br>
    <input type="file" name="img" value="{{$produk->img}}"><br>
    <input type="submit" name="submit" value="Update">
</form>
