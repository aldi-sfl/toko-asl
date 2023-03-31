<div class="modal fade" id="addmodal{{ url('product') }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered"  >
      <div class="modal-content " style="background: #f2f4f6" >
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">tambah data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        <form action="{{ url('product') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Nama produk</label>
                <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" class="form-control" id="nama_produk" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label  class="form-label">deskripsi</label>
                <input type="text" name="deskripsi" value="{{ old('deskripsi') }}" class="form-control" id="deskripsi" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="form-label">Kategori</label>
              <select name="category_id" id="category_id" class="form-control">
              <option selected disabled hidden>-- Pilih Kategori --</option>
              @foreach ($categories as $category)
                  <option value="{{ $category->id }}"{{ old('category_id') == $category->id ? ' selected' : '' }}>
                      {{ $category->nama_kategori }}</option>
              @endforeach
          </select>
          </div>
            <div class="mb-3">
                <label  class="form-label">gambar</label>
                <input type="file" name="image" value="{{ old('image') }}" class="form-control" id="image">
            </div>
            <div class="mb-3">
                <label  class="form-label">harga</label>
                <input type="text" name="harga" value="{{ old('harga') }}" class="form-control" id="harga" >
            </div>
            <div class="mb-3">
                <label  class="form-label">jumlah</label>
                <input type="text" name="jumlah" value="{{ old('jumlah') }}" class="form-control" id="jumlah" aria-describedby="emailHelp">
            </div>
            
            
            <button type="submit" name="submit"  class="btn btn-primary">tambah produk</button>
            </form>   
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
