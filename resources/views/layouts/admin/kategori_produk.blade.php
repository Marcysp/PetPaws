<div class="w-1/2">
    <div class="bg-white rounded-xl mx-4 my-4 p-3">
        <form action="/kategori/store" method="POST">
            @csrf
            <label for="nama_kategori" class="text-slate-700 pb-3">Kategori Produk</label><br>
            <input type="text" required name="nama_kategori" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" placeholder="Nama Kategori">
            <button class="my-1 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500  transition-all text-sm"><input type="submit" name="submit" value="Save" class="cursor-pointer"></button>
        </form>
    </div>
    <div class="bg-white rounded-xl mx-4 my-4 p-3 text-slate-700">
        <table class="py-4 my-5 text-center">
            <tr class="p-5 h-10 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500">
                <th class="w-10">No</th>
                <th class="w-9/12">Nama Kategori</th>
                <th class="w-1/5">Aksi</th>
            </tr>
            <?php  $n = 0?>
            @foreach ($kategori as $k)
            <tr class="py-6 my-6 h-16 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200 overflow-hidden">
                <td>{{++$n}}</td>
                <td>{{$k->nama_kategori}}</td>
                <td><button id="myBtnK{{$k->id}}" data-target="#editKategori{{$k->id}}" class="show-modal py-0 px-1 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0 text-xl"><a href="#"><i class='bx bx-message-square-edit'></i></a></button>
                    <button class="py-0 px-1 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-0 text-xl"><a href="/kategori/delete/{{$k->id}}"><i class='bx bxs-trash'></i></a></button></td>
            </tr>
            {{-- Modal --}}
            <div id="editKategori{{$k->id}}" class="modal-manual fade myModal" tabindex="-1" role="dialog">
                <div class="modal-content-manual" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Nama Kategori</h5>
                            <span class="close-manual" id="closeK{{$k->id}}">&times;</span>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('kategori.update', $k->id) }}" method="POST">
                                @method('put')
                                @csrf
                                <label for="">Nama Kategori</label><br>
                                <input type="text" required name="nama_kategori" value="{{$k->nama_kategori}}"><br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </table>
    </div>
</div>
