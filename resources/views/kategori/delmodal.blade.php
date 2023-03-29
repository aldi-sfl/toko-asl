
<div class="modal fade" id="deletemodal{{ url('category/'.$item->id) }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 " id="staticBackdropLabel">peringatan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action='{{ url('category/'.$item->id) }}' method="post" >
            @csrf
            @method('DELETE')
               {{-- <div class="mb-3">
                 <label class="form-label">Nama kategori</label>
               </div> --}}
               <h6>apakah anda yakin akan menghapus kategori "{{ $item->nama_kategori }}"</h6>
            </form>
            
        </div>
        <div class="modal-footer">
            <form action="{{ url('category/'.$item->id) }}" method="post">
                @csrf 
                @method('DELETE')
                <button type="submit" name="submit" class="btn btn-danger">Delete</button>
            </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>