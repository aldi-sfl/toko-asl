@extends('layouts.main')
@section('web-title', 'kategori')
    

@section('home')

<div class="container">
    <div class="content content-crud">

    <h3 class="text-center"  style="margin-bottom: 5px;">Tambah data kategori </h3>
    <div class="container-content-1">
            
      <form action='' method="post" >
        @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama produk</label>
            <input type="text" name="nama_produk" class="form-control" id="nama_produk" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
          <select name="nama_kategori" class="fo rm-select" aria-label="Default select example">
            
          </select> 
        </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">harga</label>
            <input type="text" name="harga" class="form-control" id="harga" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">jumlah</label>
            <input type="text" name="jumlah" class="form-control" id="jumlah" aria-describedby="emailHelp">
          </div>

          <button type="submit" name="submit" class="btn btn-primary">tambah produk</button>
        </form>
        
        
      </div>

      
    <div class="container-content-2">
      <h4 class="text-center">tabel produk</h4>
        <table class="tbdata">
            <thead>
              <tr>
                <th>ID</th>
                <th>nama produk</th>
                <th>deskripsi</th>
                <th>kategori</th>
                <th>harga</th>
                <th>jumlah</th>
                <th colspan="3">aksi</th>
              </tr>
            </thead>
            <tbody>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
            </tbody>
        </table>

    </div> 

    

    {{-- content content-crud --}}
    </div>
    
    
</div>
    
@endsection