@extends('layouts.main')

@section('content')
<div class= "container-fluid">
  <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="form-horizontal" class="px-3 py-3">
  <article class="col-xs-12 col-md-4 offset-4">
    @csrf
    <br>
    <br>
<section class="marcoReg  bg-light">
<fieldset>

<!-- Form Name -->
<legend class="text-center"><h2>Nuevo producto</h2></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Nombre</label>
  <div>
		<input id="name" name="name" type="text" value="{{ old('name')}}" class="form-control input-md  @error('name') is-invalid @enderror" autofocus>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Descripción</label>
  <div>
		<input id="description" name="description" type="text" value="{{ old('description')}}" class="form-control input-md @error('description') is-invalid @enderror">
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="form-group">
  <select class="custom-select @error('category_id') is-invalid @enderror" name="category_id">
    <option value=" ">Seleccione una Categoría</option>
    @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
  </select>
  @error('category_id')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Cantidad</label>
  <div>
		<input id="stock" name="stock" type="integer" class="form-control input-md @error('stock') is-invalid @enderror" value="{{ old('stock')}}" placeholder="En numeros...">
    @error('stock')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Precio por unidad</label>
  <div>
		<input id="price" name="price" type="integer" class="form-control input-md @error('price') is-invalid @enderror" value="{{ old('price')}}" placeholder="En numeros...">
    @error('price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-xs-12 control-label" for="filebutton">Insertar foto</label>
  <div>
    <input id="image" name="image"  class="input-file" type="file">
    <br>
    <span style="font-size:12px">{{ $errors->first('image') }}</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-xs-12 control-label" for="singlebutton"></label>
  <div>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary offset-4">Agregar producto</button>
  </div>
</div>

</fieldset>
</form>
</article>
</section>
</div>
@endsection
