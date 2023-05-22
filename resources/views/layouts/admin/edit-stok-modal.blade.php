<div class="fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-white w-96 p-6 rounded shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Edit Stok Produk</h2>
        <form action="{{ route('stok.updateStok', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="stok" class="block mb-2">Stok</label>
                <input type="number" name="stok" id="stok" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ $produk->stok }}">
            </div>
            <div class="text-right">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white rounded px-4 py-2">Simpan</button>
                <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 rounded px-4 py-2 ml-2" onclick="closeModal()">Batal</button>
            </div>
        </form>
    </div>
</div>


