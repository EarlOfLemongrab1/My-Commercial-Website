@extends('layouts.default')
@section('main')
<title>GardenHouse</title>
    <div class="antialiased">
            <header class="full">
   
    <img class="img"src="https://lh3.googleusercontent.com/BJLV51JpkBjAtcxhMQbh2ZNJIV1pyCm6Lv_9S4rVIAMsjzF42kR2HOg7baX2jgzLHqVV1VMEQHSWAj7-equPm3HCCNlBEaQXyWtiBj4=w600"></img>
    @auth
    <form>
        <input class="button" type="button" value="SHOP" onclick="window.location.href='catalogue'" />
        </form>
        <script src="{{ asset ('js/cart.js')}}"></script>
    @endauth
]@endsection