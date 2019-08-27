@extends('layouts.main')

@section('content')
<div class= "container-fluid">
  <form method="POST" action="{{ route('products.create') }}" enctype="multipart/form-data" class="form-horizontal" class="px-3 py-3">
  <article class="col-xs-12 col-md-4 offset-4">
    @csrf
    <br>
    <br>
<section class="marcoReg  bg-light">
<fieldset>

<!-- Form Name -->
<legend class="text-center"><h2>Nuevo producto</h2></legend>
<!--{{ $errors }}-->
<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Nombre</label>
  <div>
		<input id="name" name="name" type="text" value="{{ old('name')}}" class="form-control input-md  @error('name') is-invalid @enderror">
    <br>
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
		<input id="descripcion" name="descripcion" type="text" value="" class="form-control input-md">
    <br>
    <span><?= isset($errores["descripcion"])? $errores["descripcion"]: ""; ?></span>
  </div>
</div>

<div class="form-group">
  <select class="custom-select" name="categoria_id">

  </select>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Cantidad</label>
  <div>
		<input id="cantidad" name="cantidad" type="integer" class="form-control input-md" value="" placeholder="En numeros...">
    <br>
    <span><?= isset($errores["cantidad"])? $errores["cantidad"]: ""; ?></span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-xs-12 control-label" for="text">Precio por unidad</label>
  <div>
		<input id="precio" name="precio" type="integer" class="form-control input-md" value="" placeholder="En numeros...">
    <br>
    <span><?= isset($errores["precio"])? $errores["precio"]: ""; ?></span>
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-xs-12 control-label" for="filebutton">Insertar foto</label>
  <div>
    <input id="filebutton" name="filebutton"  class="input-file" type="file">
    <br>
    <span><?= isset($errores["filebutton"])? $errores["filebutton"]: ""; ?></span>
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
