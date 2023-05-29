@foreach ($paket_grooming as $g)
<div>
    {{$g->jenis_grooming}}
    <div>{{$g->harga}}
        <div>
            <form action="/service/grooming/{{$g->id}}" method="post">
                @csrf
                <button type="submit" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-pink-500 px-8 py-3 text-base font-medium text-white hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Tambah layanan</button>
            </form>
        </div>
    </div>
</div>
@endforeach
