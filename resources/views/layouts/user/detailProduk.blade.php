@foreach ($produk as $p)
{{-- modal --}}
<div class="pt-20 bg-white px-3 md:px-10 modal-manual fade myModal" id="editModal{{$p->id}}">
    <div class="relative z-10" role="dialog" aria-modal="true">
        <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                    <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                        <button type="button" class="absolute rigth-4 top-4 text-gray-500 hover:text-gray-600 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                        <span class="sr-only">Close</span>
                        <span class="close-manual" id="close{{$p->id}}">&times;</span>
                        </button>

                        <div class="grid w-full grid-cols-1 sm:items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8 mx-auto md:justify-items-start justify-items-center">
                            <div class="sm:col-span-4 lg:col-span-5 w-80 h-96">
                                <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5 h-96">
                                    <center><img src="{{ asset("assets/img/imgData/$p->img") }}" alt="" class="object-cover object-center h-full w-auto"></center>
                                </div>
                            </div>

                                <div class="sm:col-span-8 lg:col-span-7">
                                    <h2 class="text-2xl font-bold text-gray-900 sm:pr-12 text-center md:text-left">{{$p->nama_produk}}</h2>
                                    <section aria-labelledby="information-heading" class="mt-2">
                                    <p class="text-2xl text-gray-900 text-center md:text-left">@currency($p->harga)
                                        @if ($p->stok>=1)
                                        <span class="inline-flex items-center rounded-md bg-green-500 px-2 py-1 text-sm font-semibold text-white"><i class='bx bx-check'></i>Ready Stock</span>
                                        @else
                                        <span class="inline-flex items-center rounded-md bg-red-500 px-2 py-1 text-sm font-semibold text-white"><i class='bx bx-x'></i>Stok Habis</span>
                                        @endif</p>
                                    </section>
                                    <div class="h-52">
                                        <div class="pr-5">
                                            <h3 class="mb-1 mt-4 text-gray-400">Deskripsi : </h3>
                                            <div class="text-base text-gray-700">
                                                {{$p->deskripsi}}
                                            </div>
                                        </div>
                                        <div class="h-full">
                                            <form method="POST" action="/pesan/{{$p->id}}">
                                                @csrf
                                                <label class="mb-1 mt-4 text-gray-400 w-max">Jumlah :</label>
                                                <input type="number" class="mb-1 mt-4 px-3" name="qty" value="1" required>
                                                <button type="submit" @if ($p->stok<1) @disabled(true) class="bottom-0 cursor-default mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-pink-300 px-8 py-3 text-base font-medium text-white" @endif class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-pink-500 px-8 py-3 text-base font-medium text-white hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2"><i class='bx bxs-cart'></i>Add to Cart</button>
                                            </form>
                                        </div>

                                    </div>
                                    <section aria-labelledby="options-heading" class="mt-10">

                                    </section>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@section('script-manual')
@foreach ($produk as $p)
<script>
    // Get the modal
    var modal{{$p->id}} = document.getElementById("editModal{{$p->id}}");

    // Get the button that opens the modal
    var btn{{$p->id}} = document.getElementById("myBtn{{$p->id}}");

    // Get the <span> element that closes the modal
    var span{{$p->id}} = document.getElementById("close{{$p->id}}");

    // When the user clicks on the button, open the modal
    btn{{$p->id}}.onclick = function() {
        modal{{$p->id}}.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span{{$p->id}}.onclick = function() {
        modal{{$p->id}}.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal{{$p->id}}) {
            modal{{$p->id}}.style.display = "none";
        }
    }
</script>
@endforeach
@endsection
