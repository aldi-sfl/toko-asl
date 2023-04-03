@extends('layouts.main')
@section('web-title', 'checkout -')

@section('home')

<div class="container">
	<div class="content content-crud">
		<h3 >keranjang</h3>
	</div>
	<div class="container1">
		<div class="column">
			{{-- <h1>list cart product</h1> --}}
			<div class="cart-item">
				{{-- <input type="checkbox" name="cart-item" class="cart-checkbox"> --}}
				<img src="../img/logo/smartphone.png" alt="" width="150px" height="150px">
				<table class="cart-table">
					<tr>
						<td colspan="3"><h5 style="font-weight: 700;" >nama produk</h5></td>
					</tr>
					<tr>
						<td>harga</td>
						<td>:</td>
						<td>rp...</td>
					</tr>
					<tr> 
						<td>stok</td>
						<td>:</td>
						<td>variabel</td>
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
		</div>
		<div class="column2">
			<h1>pembayaran</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia nulla vitae felis lobortis, id congue velit blandit. Integer et sapien euismod, varius nibh eu, molestie nibh. Maecenas ultrices diam a ligula aliquam, vitae consequat tortor faucibus. Vivamus rutrum quam eget ipsum accumsan, vel elementum neque facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla pulvinar bibendum diam vel rhoncus. Sed sit amet interdum nisi, at ultrices nibh. Vestibulum efficitur enim quis leo luctus scelerisque.</p>
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

		margin: 10px 0;
	}

	.cart-table{ 
		margin: 0 10px 10px 10px;
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
</style>
@endsection