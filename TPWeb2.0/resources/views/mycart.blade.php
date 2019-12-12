@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" id="category-banner-mycart">
        <div class="container">
          <h1 class="display-4">MY CART</h1>
        </div>
</div>

<div class="container">
    <div class="jumbotron" id="header">
        <table class="table table-borderless" id="cart-table">
            <thead class="table-header">
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Variation</th>
                    <th scope="col">Instructions</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach($orders as $order)
                <tr>
                    <td><ul class="ord-ord"><li><img class="img-table" src="css/images/{{ $order->product }}.png" alt=""></ul></td>
                    <td class="align-middle">{{ $order->price }}</td>
                    <td class="align-middle">{{ $order->quantity }}</td>
                    <td class="align-middle">{{ $order->size }}</td>
                    <td class="align-middle">{{ $order->instructions }}</td>
                    <td class="align-middle">{{ $order->total }}</td>
                    <td class="align-middle">
                        <form method="post" class="delete_form" action="{{ route('delete',['id'=>$order->id]) }}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">Cancel</i></button>
                        </form>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form method="post" class="delete_form" action="{{ route('delete',['id'=>$order->id]) }}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE" />
                <button  type="submit" id="proceed" class="btn btn-success">Proceed Order</button>
        </form>
    </div>
</div>
@endsection