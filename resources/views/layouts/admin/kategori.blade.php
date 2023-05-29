@extends('layouts.admin.main')
@section('title') Kategori @endsection
@section('href') # @endsection
@section('title-nav-1') Produk @endsection
@section('title-nav-2') Kategori @endsection
@section('content')
<div class="flex min-w-fit">
    @include('layouts.admin.kategori_produk')
    @include('layouts.admin.kategori_hewan')
    @include('layouts.admin.kategori_brand')
</div>

@endsection

@section('script-manual')
@foreach ($brand as $b)
<script>
    // Get the modal
    var modalB{{$b->id}} = document.getElementById("editBrand{{$b->id}}");

    // Get the button that opens the modal
    var btnB{{$b->id}} = document.getElementById("myBtnB{{$b->id}}");

    // Get the <span> element that closes the modal
    var spanB{{$b->id}} = document.getElementById("closeB{{$b->id}}");

    // When the user clicks on the button, open the modal
    btnB{{$b->id}}.onclick = function() {
        modalB{{$b->id}}.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    spanB{{$b->id}}.onclick = function() {
        modalB{{$b->id}}.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalB{{$b->id}}) {
            modalB{{$b->id}}.style.display = "none";
        }
    }
</script>
@endforeach
@foreach ($hewan as $h)
<script>
var modalH{{$h->id}} = document.getElementById("editHewan{{$h->id}}");

// Get the button that opens the modal
var btnH{{$h->id}} = document.getElementById("myBtnH{{$h->id}}");

// Get the <span> element that closes the modal
var spanH{{$h->id}} = document.getElementById("closeH{{$h->id}}");

// When the user clicks on the button, open the modal
btnH{{$h->id}}.onclick = function() {
    modalH{{$h->id}}.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanH{{$h->id}}.onclick = function() {
    modalH{{$h->id}}.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalH{{$h->id}}) {
        modalH{{$h->id}}.style.display = "none";
    }
}
</script>
@endforeach
@foreach ($kategori as $k)K
<script>
 // Get the modal
 var modalK{{$k->id}} = document.getElementById("editKategori{{$k->id}}");

// Get the button that opens the modal
var btnK{{$k->id}} = document.getElementById("myBtnK{{$k->id}}");

// Get the <span> element that closes the modal
var spanK{{$k->id}} = document.getElementById("closeK{{$k->id}}");

// When the user clicks on the button, open the modal
btnK{{$k->id}}.onclick = function() {
    modalK{{$k->id}}.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanK{{$k->id}}.onclick = function() {
    modalK{{$k->id}}.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalK{{$k->id}}) {
        modalK{{$k->id}}.style.display = "none";
    }
}
</script>
@endforeach
@endsection
