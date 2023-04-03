@extends('layouts.main')
@section('web-title', 'kategori -')
    

@section('home')

<div class="container">
    <div class="content content-crud">

    <h3 class="text-center"  style="margin-bottom: 5px;">Tambah data kategori </h3>
    @include('partials.validasi')
    <div class="container-content-1">
      <form action='{{ url('category') }}' method="post" enctype="multipart/form-data" >
        @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama kategori</label>
            <input type="text"  name="nama_kategori" value="{{ Session::get('nama_kategori') }}" class="form-control" id="nama_kategori" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">gambar kategori</label>
            <input type="file"  name="image" value="{{ Session::get('image') }}" class="form-control" id="image" aria-describedby="emailHelp">
          </div>
            
          <button type="submit"  name="submit" class="btn btn-primary ">tambah kategori</button>
        </form>
        
        
      </div>

      
    <div class="container-content-2">
      <h4 class="text-center">tabel produk</h4>
        <table class="tbdata">
            <thead>
              <tr>
                <th>ID</th>
                <th>kategori</th> 
                <th>gambar</th>
                <th colspan="2">aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_kategori }}</td>
                    <td>
                      @if($item->image)
                    <img src="{{ asset('../public/k_images/'.$item->image) }}" alt="error" style="height: 100px;width:100px;">
                  @else 
                    <span>No image found!</span>
                @endif
                    </td>
                    <td>
                        <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#editmodal{{ url('category/'.$item->id) }}" >Update</button>
                        @include('kategori.editmodal')
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#deletemodal{{ url('category/'.$item->id) }}" >Delete</button>
                        @include('kategori.delmodal')
                    </td>
                    
                </tr>
                @endforeach
             
            </tbody>
        </table>
        {{-- {{ $category->link() }} --}}

    </div> 

    

    {{-- content content-crud --}}
    </div>
    
    
</div>
    
@endsection