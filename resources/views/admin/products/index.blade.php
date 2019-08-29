@extends('layouts.main')

@section('content')
<div class="container-fluid p-0 white">
	<section class="table-wrapper m-0">
		<article class="table-title">
			<section class="row">
				<div class="col-sm-6">
					<h2>Administración de Productos</h2>
				</div>
				<div class="col-sm-6">
					<a href="{{route('products.create')}}" class="btn btn-outline-success"><i class="fas fa-plus"></i>  Nuevo Producto</a>
				</div>
			</section>
		</article>
		<table id='table' class="table table-striped table-hover  w-100">
			<thead class='w-100'>
				<tr>
					<th>Nombre</th>
					<th>Categoria</th>
					<th>Cantidad</th>
					<th>Precio</th>
					<th>Fecha Creación</th>
					<th>Fecha Modificación</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody class='w-100'>
				@foreach ($products as $product)
				<tr>
					<td><a href="{{route('products.edit', ['id' => $product->id])}}">{{$product->name}}</a></td>
					<td>{{$product->category['name']}}</td>
					<td>{{$product->stock}}</td>
					<td>$ {{$product->price}}</td>
					<td>{{$product->created_at}}</td>
					<td>{{$product->updated_at}}</td>
					<td class="d-flex p-2">
						<a href="{{route('products.edit', ['id' => $product->id])}}" class="edit"><button type="button" class="btn btn-outline-primary"><i class="fas fa-pencil-alt"></i></button></a>
						<form class='form-delete' action="{{route('products.destroy',['id' => $product->id])}}" method="post">
						<button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
						@method('delete')
						@csrf
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</section>
</div>
@endsection
