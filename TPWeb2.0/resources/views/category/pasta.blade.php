@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" id="category-banner-pasta">
    <div class="container">
        <h1>PASTA</h1>
    </div>
</div>
<div class="container">
    <div class="grid">
        @foreach($products as $product)
        <div class="card" id="product-container">
            <br>
            <a><h5 class="text-center">PHP {{ $product->product_price }}</h5></a>
            <hr>
            <a><div class="text-center"><img src="css/images/{{ $product->product_picture }}" id="product-image" alt=""></div></a>
            <a><h4 class="text-center"> {{ $product->product_name }}</h4></a>
            <a><p class="text-center">{{ $product->product_description }}</p></a>
            <a><div class="text-center"><button class="btn btn-success btn-md">VIEW</button></div></a>
            <br>
        </div>
        @endforeach
    </div>
</div>
@endsection