@extends('layouts.main')
@section('web-title', 'checkout -')

@section('home')

<div class="container">
	<div class="content content-crud">
		<h3 >keranjang</h3>
		<div class="item">
			
		</div>
	</div>
	<div class="container1">
		<div class="column">
			<h1>Column 1</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia nulla vitae felis lobortis, id congue velit blandit. Integer et sapien euismod, varius nibh eu, molestie nibh. Maecenas ultrices diam a ligula aliquam, vitae consequat tortor faucibus. Vivamus rutrum quam eget ipsum accumsan, vel elementum neque facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla pulvinar bibendum diam vel rhoncus. Sed sit amet interdum nisi, at ultrices nibh. Vestibulum efficitur enim quis leo luctus scelerisque.</p>
		</div>
		<div class="column2">
			<h1>Column 2</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia nulla vitae felis lobortis, id congue velit blandit. Integer et sapien euismod, varius nibh eu, molestie nibh. Maecenas ultrices diam a ligula aliquam, vitae consequat tortor faucibus. Vivamus rutrum quam eget ipsum accumsan, vel elementum neque facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla pulvinar bibendum diam vel rhoncus. Sed sit amet interdum nisi, at ultrices nibh. Vestibulum efficitur enim quis leo luctus scelerisque.</p>
		</div>
		<div class="column">
			<h1>Column 1</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia nulla vitae felis lobortis, id congue velit blandit. Integer et sapien euismod, varius nibh eu, molestie nibh. Maecenas ultrices diam a ligula aliquam, vitae consequat tortor faucibus. Vivamus rutrum quam eget ipsum accumsan, vel elementum neque facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla pulvinar bibendum diam vel rhoncus. Sed sit amet interdum nisi, at ultrices nibh. Vestibulum efficitur enim quis leo luctus scelerisque.</p>
		</div>
		<div class="column">
			<h1>Column 1</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia nulla vitae felis lobortis, id congue velit blandit. Integer et sapien euismod, varius nibh eu, molestie nibh. Maecenas ultrices diam a ligula aliquam, vitae consequat tortor faucibus. Vivamus rutrum quam eget ipsum accumsan, vel elementum neque facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla pulvinar bibendum diam vel rhoncus. Sed sit amet interdum nisi, at ultrices nibh. Vestibulum efficitur enim quis leo luctus scelerisque.</p>
		</div>
		<div class="column">
			<h1>Column 1</h1>
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