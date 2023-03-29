

@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
        <ul style="list-style: none">
            @foreach ($errors->all() as $item)
                <li >{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>    
@endif

{{-- validasi submit data jika sudah ad pada databasea--}}
@if(session('error'))
    <div class="alert alert-danger text-center">
        {{ session('error') }}
    </div>
@endif

{{-- include validasi text input --}}
@if (Session::has('success'))
    <div class="pt-3">
        <div class="alert alert-success text-center">
            {{ Session::get('success') }}
        </div>
    </div>
@endif