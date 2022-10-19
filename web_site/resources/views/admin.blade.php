@extends('layouts.default')
@section('main')
<title>Admin</title>
<p class="adminp">Add a new article or update the stock :</p><br>
            <form class="adminform" action="{{route('new-product')}}" method="post" enctype="multipart/form-data">
            @csrf
            <p><label>Product name :</label><br><br><input class="text" type="text" name="name" placeholder="Product Name"></p>
            <p><label>Image : </label><br><br><input class="text" type="file" name="image" placeholder="Image"></p>
            <p><label>Description : </label><br><br><input class="text" type="text" name="description" placeholder="Creator"></p>
            <p><label>Stock :</label><br><br><input class="text" type="text" name="stock" placeholder="Stock"></p>
            <p><label>Price :  </label><br><br><input class="text" type="text" name="price" placeholder="Price"></p><br>
            <p><input type="submit" value="Add"></p>
            </form>
            
@endsection