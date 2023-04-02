@extends('layouts.main')
@section('web-title', 'produk -')
    

@section('home')

<div class="container">
    <div class="content content-crud">

    <h3 class="text-center"  style="margin-bottom: 5px;">Tambah data produk </h3>
    @include('partials.validasi')
    <div class="container-content-1">
        <button type="submit" data-bs-toggle="modal" data-bs-target="#addmodal{{ url('product') }}" name="submit"  class="btn btn-primary">tambah produk</button>
        @include('produk.addmodal')
        
        
      </div>

      
    <div class="container-content-2">
      <h4 class="text-center">tabel produk</h4>
        <table class="tbdata">
            <thead>
              <tr>
                <th>ID</th>
                <th>nama produk</th>
                <th>deskripsi</th>
                <th>gambar</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>kategori</th>
                <th colspan="2">aksi</th>
              </tr>
            </thead>
            <tbody>
             <tr>
              @foreach ($product as $item)
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->deskripsi }}</td>
               <td>
                @if($item->image)
                    <img src="{{ asset('../public/p_images/'.$item->image) }}" alt="error" style="height: 100px;width:100px;">
                  @else 
                    <span>No image found!</span>
                @endif
               </td>
                {{-- <td><img src="{{ asset('storage/images/'.$item->image) }}"alt="error" width="50%" height="50%"></td> --}}
                {{-- <td><img src="{{ asset('storage/images/product_64285.png') }}" alt="" width="30%" height="30%"></td> --}}
                {{-- <td>{{ $item->image }}</td> --}}
                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td>{{ $item->jumlah }}</td>  
                <td>{{ $item->category->nama_kategori }}</td>
                <td>
                    <button type="submit" data-bs-toggle="modal" data-bs-target="#editmodal{{ url('product/'.$item->id) }}" name="submit" class="btn btn-warning">update</button>
                  @include('produk.editmodal')
                </td>
                <td>
                  <button type="submit" data-bs-toggle="modal" data-bs-target="#deletemodal{{ url('product/'.$item->id) }}" name="submit" class="btn btn-danger">delete</button>
                  @include('produk.delmodal')
                </td>
                  
              </tr>
              @endforeach
            </tbody>
        </table>

    </div> 

    

    {{-- content content-crud --}}
    </div>
    
    
</div>
    
@endsection