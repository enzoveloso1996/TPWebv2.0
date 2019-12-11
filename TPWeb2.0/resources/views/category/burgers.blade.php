@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" id="category-banner-burger">
    <div class="container">
        <h1 class="display-4">BURGERS</h1>
    </div>
</div>
<div class="container">
    @foreach($products as $product)
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5 class="text-center">PHP {{ $product->product_price }}</h5></li>
            <li class="list-group-item"><div class="text-center">{{ $product->product_picture }}</div></li>
            <li class="list-group-item"><h4 class="text-center"> {{ $product->product_name }}</h4></li>
            <li class="list-group-item"><p class="text-center">{{ $product->product_description }}</p></li>
            <li class="list-group-item"><div class="text-center"><button class="btn btn-success btn-md btn-block">VIEW</button></div></li>
        </ul>
    </div>
    @endforeach
</div>
@endsection