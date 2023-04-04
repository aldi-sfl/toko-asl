@extends('layouts.main')
@section('web-title', 'setting -')
@section('home')
    
<div class="container">
    <div class="content content-crud">
		<h3>setting profile</h3>

        <div class="setting-wrap">
            <table class="set-table">

                <tr>
                    <td rowspan="2">
                            <label for="file-upload">
                            <img id="avatar" src="../img/bg/avataritem.png" alt="" style="border: 3px solid #FFF4E0;">
                            </label>
                    </td>
                    <td><h4>nama</h4></td>
                    <td><h4>:</h4></td>
                    <td><h4>nama km</h4></td>
                </tr>
                
                <tr>
                    <td><h4>email</h4></td>
                    <td><h4>:</h4></td>
                    <td><h4>emailm</h4></td>
                </tr>
                <tr>
                    <td class="text-center" colspan="4"  >
                        <form action="/upfp" method="POST">
                            @csrf
                            <input id="file-upload" type="file" name="image">
                            <button class="btn btn-primary" type="submit">Upload Image</button>
                        </form>
                
                    </td>
                </tr>
            </table>
        </div>
	</div>
</div>

<style type="text/css">
.set-table img{
    
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 5px solid;
}

.set-table td {
    padding: 3px 20px;
  }

  /* .set-table td, th{
    border: 1px solid;
  } */

</style>


@endsection