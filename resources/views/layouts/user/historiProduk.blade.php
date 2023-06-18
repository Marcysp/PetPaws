<h2>Histori</h2>
<div>
    @foreach ($pesanan as $p)
    <p>{{$p->nama}}</p>
    <p>{{$p->alamat}}</p>
    <p>{{$p->no_hp}}</p>
    <p>{{ \Carbon\Carbon::parse($p->tanggal_pesanan)->format('d F Y') }}</p>
    @endforeach
</div>
