@extends('layouts.app')

@section('content')
<div class="container">
        <div class="jumbotron" id="header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <br><br><br><br>
                        <div class="row justify-content-center">
                        <img class="img-show" style="height: 200px; width: 200px;" src="css/images/{{ $product->product_picture }}" alt="product-image">
                        </div>
                        <br><br><br>
                        <div class="row justify-content-center">
                            <h2 class="card-title">{{ $product->product_name }}</h2>
                        </div>
                        <br><br><br>
                        <div class="row justify-content-center">
                            <h3 class="product-show-description">{{ $product->product_description }}</h3>
                        </div>
                    </div>
                        <div class="row justify-content-center">
                                <ul>
                                    <div class="row justify-content-center">
                                    <h3 id="f2">PHP {{ $product->product_price }}</h3>
                                    </div>
                                    <hr>
                                    <div class="row justify-content-center">
                                    <h3>SIZE</h3><h2 class="required">*</h2>
                                    </div>
                                    <form action="/order" method="POST">
                                        @csrf
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-2" id="radiobutton">
                                            <input type="radio" name="variation"  id="small" value="small"/><br><br>
                                            <input type="radio" name="variation"  id="medium" value="medium"/><br><br>
                                            <input type="radio" name="variation"  id="large" value="large"/><br><br>
                                        </div>
                                        <div class="col" id="sizes">
                                            <p>Small</p>
                                            <p>Medium</p>
                                            <p>Large</p>
                                        </div>
                                        </div>
                                            <hr>
                                            <h4>SPECIAL INSTRUCTIONS (OPTIONAL)</h4>
                                                <textarea rows="2" cols="50" class="form-control input-lg" placeholder="Add special Instruction here." id="instructions" name="instructions"></textarea>
                                            <br>
                                            <hr>
                                            <div class="product-quantity">
                                            <h3>QUANTITY</h3><h2 class="required">*</h2>
                                            </div>
                                            <div class="product-quantity">
                                            <input type="hidden" id="price" name="price" oninput="calculate()" value="{{ $product->product_price }}">
                                                <input class="form-control quantity-input" type="number" min="1" max="50" pattern="[0-9]{10}" size="40px" id="quantity" oninput="calculate();" id="quantity" name="quantity">
                                                <br>
                                                <input type="hidden" id="total" name="total">
                                            </div>
                                            <br>
                                            @guest
                                            @if (Route::has('register'))
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <a class="btn btn-lg btn-success btn-block" href="/login" >Order</a>
                                            @endif
                                            @else
                                            <input type="hidden" name="product" value="{{ $product->product_name }}">
                                            <input type="hidden" name="size" id="size">
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <button class="btn btn-lg btn-success btn-block" value="submit" name="submit" type="submit">Order</button>
                                        @endguest
                                        </div>
                                    </div>
                                 </form><br><br>
                                                            
                                </ul>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="./javascript.js"></script>
    <script
    src="http://maps.googleapis.com/maps/api/js?key=YOUR_APIKEY&sensor=false">
</script>
    <script>
            function calculate() {
                    var price = document.getElementById("price").value; 
                    var quantity = document.getElementById("quantity").value;
                    var total = document.getElementById("total"); 
                    var x = price * quantity;
                    document.getElementById("total").value = x;
            }
    </script>
    <script>
        $('input[name=variation]').click(function() {
            $('#size').val($('input[name=variation]:checked').val());
        });
    </script>
@endsection