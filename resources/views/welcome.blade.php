@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb" style="padding-top: 50px;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li>
    </ol>
</nav>
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-7">
                <h4>Products In Our Store</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3">
                <div class="card" style="margin-bottom: 20px; height: auto;">
                    <img src="{{ asset($product->image) }}" class="card-img-top mx-auto" 
                    style="height: 150px; width: 150px;display: block;" alt="">
                    <div class="card-body">
                        <a href="">
                            <h6 class="card-title">{{ $product->name }}</h6>
                        </a>
                        <p>${{ $product->price }}</p>
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                            <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                            <input type="hidden" value="{{ $product->image }}" id="image" name="image">
                            <input type="hidden" value="1" id="quantity" name="quantity">
                            <div class="card-footer" style="background-color: white;">
                                <div class="row">
                                    <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                        <i class="fa fa-shopping-cart"></i> Add to cart
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection