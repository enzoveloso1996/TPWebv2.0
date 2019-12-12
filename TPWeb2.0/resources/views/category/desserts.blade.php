@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" id="category-banner-desserts">
    <div class="container">
        <h1>DESSERTS</h1>
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
            <div class="text-center"><a class="btn btn-success btn-md" href="{{ route('view-product-detail',['id'=>$product->id]) }}">VIEW</a></div>
            <br>
        </div>
        @endforeach
    </div>
</div>
@endsection