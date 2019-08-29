@extends('layouts.main')
@section('content')
<div class="carrito col-10 bg-light">
        <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
    <h2>Carrito de Compras</h2>
    <div>
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:5%">Foto</th>
                    <th style="width:50%">Producto / Descripción</th>
                    <th style="width:10%">Stock</th>
                    <th style="width:10%">Precio</th>
                    <th style="width:8%">Cantidad</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:5%">Eliminar</th>
                </tr>
            </thead>
        <tbody>
            @if (session()->get('cart.products'))
            @php
            $total = 0;
            @endphp
            @foreach (session()->get('cart.products') as $product)

              @php
              $total = $total + $product->price;
              @endphp


                <tr>
                <td data-th="Foto">
                  <div class="row">
                  <div class="col-sm-2 hidden-xs"><img src="{{Storage::url($product->image)}}" alt="..." class="img-responsive" style="max-width:99px; max-height:99px" />
                    </div>
                <td data-th="Producto / Descripcion">
                  <div class="row">
                    <div class="col-sm-10">
                      <h4 class="nomargin">{{$product->name}}</h4>
                        <p><{{$product->description}}</p>
                    </div>
                  </div>
                </td>
                <td data-th="Stock">{{$product->stock}}</td>
                <td data-th="Precio">{{$product->price}}</td>
                <td data-th="Cantidad">
                 <input id="quantity" type="number" class="form-control text-center" value="">
                </td>
                <td data-th="Subtotal" id="subtotal" class="text-center"> {{$total}}</td>
                <td class="actions" data-th="">
                  <form class='form-delete' action="{{route('cart.remove',['id' => $product->id])}}" method="post">
      						<button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
      						@method('delete')
      						@csrf
      						</form>
                </td>
                @endforeach
            </tr>
        </tbody>
    <tfoot>
      <tr>
        <td><button type="submit"><a href="cart/flush" class="btn btn-warning"><i class="fas fa-angle-left"></i> Vaciar</a></button></td>
        <td colspan="4" class="hidden-sm"></td>
        <td  data-th="total" id="total"  class="hidden-sm text-center"> {{$total}} </td>
        <td><a href="/cart/checkout" class="btn btn-success btn-block">Comprar <i class="fa fa-angle-right"></i></a></td>
      </tr>
      @else
        <div class="alert alert-danger" role="alert">
            Aun el carrito esta Vacío<a href="/products">!</a>!
        </div>
      @endif
    </tfoot>
  </table>
    </div>
  </div>
  <script src ="{{asset('js/carrito.js')}}"></script>
  @endsection
