@extends('layouts.base')
@section('title', 'WoodLess - '. $product->title)

@php
    $attributes = json_decode($product->attributes, true);
    $tags = explode(',', $product->tags);
@endphp

@section('content')
    <div class="container" id="product">
        <div class="row" id="gallery">

        </div>

        <div class="row" id="about">
            <div class="col-12">
                <h1>{{$product->title}}</h1>
                @foreach ($tags as $tag)
                    <p>{{$tag}}</p>
                @endforeach
                
                <h3>£{{$product->cost}}</h3>
                
                @foreach ($attributes as $attribute => $values)
                    <p>{{'Attribute: '. $attribute . ' Value: '.$values}}</p>
                @endforeach
            </div>
        </div>

        <div class="row" id="description">
            <h2>About Product</h2>
            <p>{{$product->description}}</p>
        </div>
    </div>

    <div class="container" id="similar-products">

    </div>

    <div class="container" id="create-review">
        <div class="row">
            <div class="col-12">
                <h1>Add a Review</h1>
            </div>
        </div>
    </div>

    <div class="container" id="reviews">
        <div class="col-12">
            <h1>Reviews</h1>
        </div>
    </div>
@endsection