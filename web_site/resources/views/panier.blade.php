@extends('layouts.default')
@section('main')
<h3 style="color:white">Cart</h3>
<div >
    <table id="cartcontent">
        <tr>
            <th>Remove</th>
            <th id="idd">ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Quantity</th>
            <th >Total</th>
        </tr>
    </table>
</div>
<script src="{{ asset('js/cart.js')}}"></script> 
<script> display_cart();</script>
@endsection