<div class="w-1/2">
    <div class="bg-white rounded-xl mx-4 my-4 p-3">
        <form action="/hewan/store" method="POST">
            @csrf
            <label for="nama_hewan" class="text-slate-700 pb-3">Kategori Hewan</label><br>
            <input type="text" required name="nama_hewan" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" placeholder="Nama Hewan">
            <button class="my-1 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500  transition-all text-sm"><input type="submit" name="submit" value="Save" class="cursor-pointer"></button>
        </form>
    </div>
    <div class="bg-white rounded-xl mx-4 my-4 p-3 text-slate-700">
        <table class="py-4 my-5 text-center">
            <tr class="p-5 h-10 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500 text-center">
                <th class="w-10">No</th>
                <th class="w-9/12">Nama Hewan</th>
                <th class="w-1/5">Aksi</th>
            </tr>
            <?php  $i = 0?>
            @foreach ($hewan as $h)
            <tr class="py-6 my-6 h-16 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200 overflow-hidden">
                <td>{{++$i}}</td>
                <td>{{$h->nama_hewan}}</td>
                <td><button id="myBtnH{{$h->id}}" data-target="#editHewan{{$h->id}}" class="show-modal py-0 px-1 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0 text-xl"><a href="#"><i class='bx bx-message-square-edit'></i></a></button>
                    <button class="py-0 px-1 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-0 text-xl"><a href="/hewan/delete/{{$h->id}}"><i class='bx bxs-trash'></i></a></button></td>
            </tr>
            {{-- Modal --}}
            <div id="editHewan{{$h->id}}" class="modal-manual fade myModal" tabindex="-1" role="dialog">
                <div class="modal-content-manual" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-2xl mb-4">Edit Kategori Hewan</h5>
                            <span class="close-manual" id="closeH{{$h->id}}">&times;</span>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('hewan.update', $h->id) }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama hewan</label><br>
                                    <input type="text" required name="nama_hewan" value="{{$h->nama_hewan}}" class="form-control block w-1/2 rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"><br>
                                </div>

                                <button type="submit" class="my-4 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-500">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </table>
    </div>
</div>
