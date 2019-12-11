@extends('layouts.app')

@section('content')
<div id="carouselFull" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img id="slider" class="d-block img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT3UZ5HshtH744bfNw5Nc0llhMA9_HtcS1KmzM5eSUR9vNniUFl" alt="First slide">
        </div>
        <div class="carousel-item">
                <img id="slider" class="d-block img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT3UZ5HshtH744bfNw5Nc0llhMA9_HtcS1KmzM5eSUR9vNniUFl" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img id="slider" class="d-block img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT3UZ5HshtH744bfNw5Nc0llhMA9_HtcS1KmzM5eSUR9vNniUFl" alt="Third slide">
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
<div class="container">
<div class="row">
    <div class="col-md-4">
            <div class="hovereffect">
                <img class="img-responsive" src="https://media.farandwide.com/fd/c1/fdc19e71f53540538473924523b188c1.jpg" alt="">
                <div class="overlay">
                   <h2>Burgers</h2>
                   <a class="info" href="/burgers">Order</a>
                </div>
            </div>
    </div>
    <div class="col-md-4">
            <div class="hovereffect">
                <img class="img-responsive" src="https://media.socastsrm.com/wordpress/wp-content/blogs.dir/1050/files/2017/09/DSC_4875.jpg" alt="">
                <div class="overlay">
                   <h2>Rice Meals</h2>
                   <a class="info" href="ricemeals">Order</a>
                </div>
            </div>
    </div>
    <div class="col-md-4">
            <div class="hovereffect">
                <img class="img-responsive" src="https://www.chatelaine.com/wp-content/uploads/2017/04/EasyLemonPasta-1.jpg" alt="">
                <div class="overlay">
                   <h2>Pasta</h2>
                   <a class="info" href="/pasta">Order</a>
                </div>
            </div>
    </div>
    <div class="col-md-4">
            <div class="hovereffect">
                <img class="img-responsive" src="https://olo-images-live.imgix.net/3a/3afe98ddcf4643a0b20c068b2c59f2ce.jpg?auto=format%2Ccompress&q=60&cs=tinysrgb&w=500&h=333&fit=fill&fm=png32&bg=transparent&s=862b0bcde81b3d6190fb8465f031a5cf" alt="">
                <div class="overlay">
                   <h2>Breakfast</h2>
                   <a class="info" href="/breakfasts">Order</a>
                </div>
            </div>
    </div>
    <div class="col-md-4">
            <div class="hovereffect">
                <img class="img-responsive" src="https://img.huffingtonpost.com/asset/5813a6fa17000006035ba6e2.jpeg?ops=scalefit_720_noupscale" alt="">
                <div class="overlay">
                   <h2>Desserts</h2>
                   <a class="info" href="/desserts">Order</a>
                </div>
            </div>
    </div>
    <div class="col-md-4">
        <div class="hovereffect">
            <img class="img-responsive" src="https://s23991.pcdn.co/wp-content/uploads/2013/10/batter-fried-chicken-recipe-fp.jpg" alt="">
            <div class="overlay">
               <h2>Chickens</h2>
               <a class="info" href="/chicken">Order</a>
            </div>
        </div>
</div>
</div>
</div>
@endsection
