<div class="modal fade" id="editmodal{{ url('category/'.$item->id) }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Update data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action='{{ url('category/'.$item->id) }}' method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ID kategori</label>
              {{ $item->id }}
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">nama kategori</label>
              <input type="text" name="nama_kategori" value="{{ $item->nama_kategori }}"  class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">gambar</label>
              <input type="file" name="image" value="{{ $item->image }}"  class="form-control" id="recipient-name">
            </div>
            <button type="submit" value="submit" class="btn btn-primary" value="submit">Update</button>
          </form>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>