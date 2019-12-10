@include('layouts.app')

@section('content')

<h1>WAWASAYO</h1>
    @foreach($products as $product)
    @csrf
        <p>{{ $product->product_name }}</p>
        <p>{{ $product->product_price }}</p>
    @endforeach
@endsection