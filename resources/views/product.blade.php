<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <link href="{{asset('img/logowithoutbg.png')}}" rel="icon" type="image/x-icon">
    
    <script src="https://kit.fontawesome.com/de52212229.js" crossorigin="anonymous"></script>
    <title>Browse Products</title>
    <style>
        body {
            background-color: #EEF6FF;
        }

        .nav-pills .nav-link.active, .nav-pills .nav-link:hover {
        color: #23713E;
        background-color: #F3E309;
        border-color: #F3E309;
        }

        .nav-pills .nav-link {
            color: #4D9941 ;
        }
    </style>
</head>
<body>
    <div class="fixed-top">
        @include('header2')
    </div>

    <div class="container-fluid">
        <div class="d-block">
            <div class="container">
                <div class="mt-5"></div>
                <div class="mt-5"></div>
                <div class="mt-5"></div>
                <br>
                <ul class="nav nav-pills mt-5 mb-3">
                    <div class="mt-3"></div>
                    <li class="nav-item">
                        <a class="nav-link active" id="all-tab" data-toggle="pill" href="#all">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="academic-tab" data-toggle="pill" href="#academic">Academic Supply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="study-tab" data-toggle="pill" href="#study">Study Materials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="electronics-tab" data-toggle="pill" href="#electronics">Electronics and Gadgets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="clothing-tab" data-toggle="pill" href="#clothing">Clothing</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-md-3">
                                <a href="{{route('viewproduct', $product->id)}}">
                                    <div class="card mt-5">
                                            <img class="card-img-top" style="height: 200px; object-fit: cover;" src="{{asset('uploads/products/'.$product->image)}}" alt="product image">
                                        <div class="card-body">
                                            <h5 class="card-title" id="product1">{{$product->name}}</h5>
                                            <p class="card-text" style="text-align: justify;">₱{{$product->price}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach 
                        </div>
                    </div>

                    <div class="tab-pane fade" id="academic">
                        <div class="row">
                            @foreach($products as $product)
                            @if($product->category == "Supply")
                            <div class="col-md-3">
                                <a href="{{route('viewproduct', $product->id)}}">
                                    <div class="card mt-5">
                                            <img class="card-img-top" style="height: 200px; object-fit: cover;" src="{{asset('uploads/products/'.$product->image)}}" alt="product image">
                                        <div class="card-body">
                                            <h5 class="card-title" id="product1">{{$product->name}}</h5>
                                            <p class="card-text" style="text-align: justify;">₱{{$product->price}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach 
                        </div>
                    </div>

                    <div class="tab-pane fade" id="study">
                        <div class="row">
                            @foreach($products as $product)
                            @if($product->category == "Materials")
                            <div class="col-md-3">
                                <a href="{{route('viewproduct', $product->id)}}">
                                    <div class="card mt-5">
                                            <img class="card-img-top" style="height: 200px; object-fit: cover;" src="{{asset('uploads/products/'.$product->image)}}" alt="product image">
                                        <div class="card-body">
                                            <h5 class="card-title" id="product1">{{$product->name}}</h5>
                                            <p class="card-text" style="text-align: justify;">₱{{$product->price}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach 
                        </div>
                    </div>

                    <div class="tab-pane fade" id="electronics">
                        <div class="row">
                            @foreach($products as $product)
                            @if($product->category == "Electronics")
                            <div class="col-md-3">
                                <a href="{{route('viewproduct', $product->id)}}">
                                    <div class="card mt-5">
                                            <img class="card-img-top" style="height: 200px; object-fit: cover;" src="{{asset('uploads/products/'.$product->image)}}" alt="product image">
                                        <div class="card-body">
                                            <h5 class="card-title" id="product1">{{$product->name}}</h5>
                                            <p class="card-text" style="text-align: justify;">₱{{$product->price}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach 
                        </div>
                    </div>

                    <div class="tab-pane fade" id="clothing">
                        <div class="row">
                            @foreach($products as $product)
                            @if($product->category == "Uniform")
                            <div class="col-md-3">
                                <a href="{{route('viewproduct', $product->id)}}">
                                    <div class="card mt-5">
                                            <img class="card-img-top" style="height: 200px; object-fit: cover;" src="{{asset('uploads/products/'.$product->image)}}" alt="product image">
                                        <div class="card-body">
                                            <h5 class="card-title" id="product1">{{$product->name}}</h5>
                                            <p class="card-text" style="text-align: justify;">₱{{$product->price}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
