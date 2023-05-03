<form action="/produk/store" method="POST" enctype="multipart/form-data">
    @csrf
    <select class="form-select" aria-label="Default select example" name="produk_kategori_id">
        <option selected>Kategori Produk</option>
        @foreach ($kategori as $k)
        <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
        @endforeach
      </select><br>
    <select class="form-select" aria-label="Default select example" name="produk_brand_id">
        <option selected>Brand Produk</option>
        @foreach ($brand as $b)
        <option value="{{$b->id}}">{{$b->nama_brand}}</option>
        @endforeach
      </select><br>

      <label for="">Nama Produk</label><br>
    <input type="text" name="nama_produk"><br>
    <label for="">Harga</label><br>
    <input type="text" name="harga"><br>
    <label for="">deskripsi</label><br>
    <textarea name="deskripsi" cols="30" rows="5"></textarea><br>
    <label for="">Gambar</label><br>
    <input type="file" name="img"><br>
    <input type="submit" name="submit" value="Save">
</form>
