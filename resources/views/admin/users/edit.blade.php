@extends('layouts.main')

@section('content')
<div id='product-container' class="container-fluid p-0">
    <section class="container pt-3 pb-3 bg-light">
        <form class='form-group' method="POST" action="{{route('users.update',['id' => $user->id])}}" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <article class="row">
                <section class="col-md-3 col-sm-6">
                    <article class="product-grid mb-4 mt-4">
                        <div class="product-image">
                            <img class="pic-1" src="{{Storage::url($user->avatar)}}" style="max-width:280px; max-height:200px">
                        </div>
                    </article>
                    <article class='container-fluid p-0 mb-4'>
                      <br><br><br><br><br><br><br><br><br>
                        <label for="avatar">Cambiar imagen</label>
                        <input type="file" value="avatar" class='form-control-file' name="avatar" id="avatar">
                    </article>
                </section>
                <section class="col-md-9 col-sm-6">
                    <article class="card-body p-2 pl-4">
                        <h3 class="title mb-3"><input type="text" style="width: 100%;" name="name" id="name" value="{{$user->name}}"></h3>
                        <hr>
                        <dl class="item-property">
                            <dt>Email</dt>
                            <dd>{{$user->email}}</dd>
                        </dl>
                        <dl class="item-property">
                            <dt>Role</dt>
                            <dd>{{$user->role}}</dd>
                        </dl>
                        <hr>
                        <dl class="item-property">
                            <dt>Creado el</dt>
                            <dd>{{$user->created_at}}</dd>
                        </dl>
                        <dl class="item-property">
                            <dt>Modificado el</dt>
                            <dd>{{$user->updated_at}}</dd>
                        </dl>
                        <div class='container-fluid p-0'>
                            <a href="{{ route('users.index') }}" class="btn btn-info btn-md">Volver</a>
                            <button class="btn btn-info btn-md">Actualizar</button>
                        </div>
                    </article>
                </section>

            </article>
        </form>
        @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </section>
</div>
@endsection
