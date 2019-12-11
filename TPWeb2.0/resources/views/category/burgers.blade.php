@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" id="category-banner-burger">
    <div class="container">
        <h1>BURGERS</h1>
    </div>
</div>
<div class="container">
    <div class="grid">
        @foreach($products as $product)
        <div class="card" id="product-container">
            <br>
            <a><h5 class="text-center" id="product-price">PHP {{ $product->product_price }}</h5></a>
            <hr>
            <a><div class="text-center"><img src="css/images/{{ $product->product_picture }}" id="product-image" alt=""></div></a>
            <a><h4 class="text-center" id="product-name"> {{ $product->product_name }}</h4></a>
            <div class="text-center"><a class="btn btn-success btn-md" id="view-button">VIEW</a></div>
            <br>
        </div>
        @endforeach
    </div>
</div>
@endsection