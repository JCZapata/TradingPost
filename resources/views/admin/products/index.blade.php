@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
	<section class="table-wrapper m-0">
		<article class="table-title">
			<section class="row">
				<article class="col-sm-6">
					<h2>Administración de Productos</h2>
				</article>
				<article class="col-sm-6">
					<a href="{{route('products.create')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Agregar</span></a>
				</article>
			</section>
		</article>
		<table id='table' class="table table-striped table-hover  w-100">
			<thead class='w-100'>
				<tr>
					<th>Nombre</th>
					<th>Categoría</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Fecha Modificación</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody class='w-100'>
				@foreach ($products as $product)
				<tr>
					<td><a href="{{route('products.show',['id' => $product->id])}}">{{$product->name}}</a></td>
					<td>{{$product->category['name']}}</td>
					<td>$ {{$product->price}}</td>
					<td>{{$product->stock}}</td>
					<td>{{$product->updated_at}}</td>
					<td class=d-flex>
						<a href="{{route('products.edit', ['id' => $product->id])}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						<form id='{{$product->id}}' class='form-delete' action="{{route('products.destroy',['id' => $product->id])}}" method="post">
							@method('DELETE')
							@csrf
							<a id='delete-link-{{$product->id}}' href="#" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</section>
</div>
@endsection
