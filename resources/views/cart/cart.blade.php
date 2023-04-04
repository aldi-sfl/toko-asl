@extends('layouts.main')
@section('web-title', 'checkout -')

@section('home')

<div class="container">
	<div class="content content-crud">
		<h3 style="font-weight: 600" >keranjang</h3>
	</div>
	<div class="container1">
		{{-- <div class="column">

			<div class="cart-item">
				
				<img src="{{ asset('../public/p_images/'.$product->image) }}" alt="" width="150px" height="150px">
				<table class="cart-table">
					
					<tr>
						<td colspan="3"><h5 style="font-weight: 700;" >{{ $product->nama_produk }}</h5></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td>{{ $product->harga }}</td>
					</tr>
					<tr> 
						<td>stok</td>
						<td>:</td>
						<td>{{ $product->jumlah }}</td>
					</tr>
					<tr>
						<td>jumlah pesan</td>
						<td>:</td>
						<td><form action="">
							<input type="number" class="form-control" id="quantity" name="quantity" min="0" max="100" step="1">
						</form></td>
						<td>
							<button class="btn btn-primary" style="float: inline-end">pesan</button>
						</td>
					</tr>
					
				</table>
			</div>
		</div> --}}
		
		<div class="column">
			{{-- <h1>list cart product</h1> --}}
			<h5 style="padding-bottom: 10px; border-bottom: 1px solid black;">Check all <input type="checkbox" id="check-all"></h5>
			
			<div class="cart-item">
				
				<img src="{{ asset('../public/p_images/'.$product->image) }}" alt="" width="150px" height="150px">
				<form action="/top" id="my-form" method="POST">
					
				<table class="cart-table">
					
					<tr>
						<td colspan="3"><h5 style="font-weight: 700;" >{{ $product->nama_produk }}</h5></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td>{{ $product->harga }}</td>
					</tr>
					<tr> 
						<td>stok</td>
						<td>:</td>
						<td>{{ $product->jumlah }}</td>
					</tr>
					<tr>
						<td>jumlah pesan</td>
						<td>:</td>
						<td>
							<input type="number" class="form-control" id="quantity" name="quantity" min="0" max="100" step="1">
						</td>
						{{-- <td>
							<button class="btn btn-primary" style="float: inline-end">pesan</button>
						</td> --}}
					</tr>
					
				</table>
					<input type="checkbox" id="submit-checkbox">
					<input type="hidden" name="submit_checkbox_status" id="submit-checkbox-status" value="0">
				</form>
			</div>
		</div>
		<div class="column2">
			<h1 style="font-weight: 600">pembayaran</h1>
			<form action="/checkout" method="POST">
			<table class="table-check">
				<tr style=" border-bottom: 1px solid">
					<td>total harga</td>
					<td>:</td>
					<td>rupiah</td>
				</tr>
				<tr>
					<td colspan="2" style="font-weight: 700; font-size: 120%">total harga</td>
					<td style="font-weight: 700; font-size: 120%">RP.0000</td>
					
				</tr>
				<tr>
					<td>
						<button class="btn btn-success"><i class="fa-solid fa-cart-shopping"></i> CheckOut</button>
					</td>
				</tr>

			</table>
		</form>
		</div>
		
	</div>
</div>
<style type="text/css">
	.container1 {
		max-width: 100%;
		margin: 0 auto;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}
	.column {
		width: calc(65% - 10px);
		background-color: #fff;
		box-shadow: 0 0 10px rgba(0,0,0,0.3);
		border-radius: 5px;
		margin-bottom: 20px;
		padding: 20px;
	}
	.column2 {
		position: fixed;
		top: 221px;
    	right: 50px;
		width: calc(35% - 20px);
		background-color: #fff;
		box-shadow: 0 0 10px rgba(0,0,0,0.3);
		border-radius: 5px;
		margin-bottom: 20px;
		padding: 20px;
	}

	.cart-item{
		display: flex;
		position: relative;
		margin: 10px 0;
	}
	.cart-item #submit-checkbox {
	position: absolute;
	top: 0;
	left: 0;
	}

	.cart-table{ 
		margin: 0 10px 25px 10px;
	}
	.cart-table td{ 
		padding: 2px 20px;
	}
	h1 {
		font-size: 24px;
		margin-top: 0;
		margin-bottom: 20px;
	}
	p {
		margin-top: 0;
		margin-bottom: 10px;
	}

	.table-check td{
		padding: 5px 7px 20px ;
	}
	
</style>

<script>
	const submitCheckbox = document.getElementById('submit-checkbox');
	const submitCheckboxStatusInput = document.getElementById('submit-checkbox-status');
  
	// Listen for changes in the checkbox and update the hidden input
	submitCheckbox.addEventListener('change', function() {
	  if (submitCheckbox.checked) {
		submitCheckboxStatusInput.value = '1';
	  } else {
		submitCheckboxStatusInput.value = '0';
	  }
	});
  
	// Submit the form when the checkbox is checked
	submitCheckbox.addEventListener('click', function() {
	  if (submitCheckbox.checked) {
		document.getElementById('my-form').submit();
	  }
	});

	const checkAllCheckbox = document.getElementById('check-all');
    const form = document.getElementById('my-form');
    const checkboxes = form.querySelectorAll('input[type="checkbox"]');

    checkAllCheckbox.addEventListener('change', function() {
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = checkAllCheckbox.checked;
        });

        if (checkAllCheckbox.checked) {
            form.submit();
        }
    });
  </script>
@endsection