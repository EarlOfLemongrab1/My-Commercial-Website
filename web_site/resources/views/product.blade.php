@extends('layouts.default')
@section('main')
<body class="menu">
            <div class="all">
            <div class="oui">
    <img src="{{ asset('/img/'.$product->image) }}" class="imgpd" ></img><br>
            </div>
            <div class="info">
                <div class="txt">
                    <p style="font-size:xx-large">Informations :</p><br>
    <p >Name: {{$product->name}}</p>
<p >{{$product->description}}</p>
<p >Stock : {{$product->stock}} remaining</p>
<p >Price : {{$product->price}}$</p>
</div>
<div class="but">
<button class="button" onclick="buy('{{ $product -> id}}','{{ $product -> name}}','{{ $product -> description}}','{{ $product -> stock}}','{{ $product -> price}}')">Add to cart</button> <p><a href="/catalogue" class="button3" role="button"  >Continue shopping &#8594</a></p>
</div>
</div>
</div>
<script src="{{ asset('js/cart.js')}}"></script>

@endsection
