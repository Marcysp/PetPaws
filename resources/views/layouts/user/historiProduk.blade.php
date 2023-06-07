<h2>Histori</h2>
<div>
    @foreach ($pesanan as $p)
    <p>{{$p->nama}}</p>
    <p>{{$p->alamat}}</p>
    <p>{{$p->no_hp}}</p>
    <p>{{$p->tanggal_pesanan}}</p>
    @endforeach
</div>
