<h2>Edit Brand</h2>

<form action="/brand/{{$brand->id}}" method="POST">
    @method('put')
    @csrf
    <label for="">Nama Brand</label><br>
    <input type="text" name="nama_brand" value="{{$brand->nama_brand}}"><br>
    <input type="submit" name="submit" value="Update">
</form>
