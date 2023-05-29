@foreach ($produk as $p)
{{-- modal --}}
<div class="pt-20 bg-white px-3 md:px-10 modal-manual fade myModal" id="editModal{{$p->id}}">
    <div class="relative z-10" role="dialog" aria-modal="true">
        <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                    <div class="relative w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                        <button type="button" class="absolute rigth-4 top-4 text-gray-500 hover:text-gray-600 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                        <span class="sr-only">Close</span>
                        <span class="close-manual" id="close{{$p->id}}">&times;</span>
                        </button>

                        <div class="w-full sm:items-start gap-x-6 gap-y-8 lg:gap-x-8 mx-auto md:justify-items-start justify-items-center">
                            <div class="my-2 text-lg">
                                <h2>{{$p->nama_produk}}</h2>
                            </div>
                            <form action="{{ route('stok.update', $p->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="stok{{$p->id}}">Stok:</label>
                                    <input type="number" name="stok" id="stok{{$p->id}}" class="form-control block w-1/2 rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" value="{{$p->stok}}">
                                </div>
                                <button type="submit" class="my-4 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-500">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
