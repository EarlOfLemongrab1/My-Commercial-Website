@extends('layouts.default')
@section('main')
<div class="full">
    <p id ="added"></p>
<div class="product"> 
    
    @foreach($products as $product)
        <div class="product1">
            <div class="contentprod">
                <a href ="product/{{$product -> id}}"><img src="{{ asset('/img/'.$product->image) }}" alt="image"class="imgproduct"></a>
                <div class="desc">
                    @csrf
                    <input type="hidden" name ="id" value="{{ $product->id}}">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <p><strong>Price: </strong> {{ $product->price }}$</p>
                    <button class="button" onclick="buy('{{ $product -> id}}','{{ $product -> image}}','{{ $product -> name}}','{{ $product -> description}}','{{ $product -> stock}}','{{ $product -> price}}')">Add to cart</button> 
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="faq">
	<br><br><h1>Frequently Asked Questions : </h1>
 <div href="1" >How can I Buy NFT ?</div>
<div href="1" >How much times does it takes for my Transaction to be valid ?</div>
<div href="1" >Which Wallet Can Be Connected To This Website ?</div>
<div  href="1" >How Can I Have More Informations About These NFT ?</div>
<div  href="1" >On What Is Based The Rarity ?</div>
</div>
</div> 
<script src="{{ asset('js/cart.js')}}"></script>
@endsection