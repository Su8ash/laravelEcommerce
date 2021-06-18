@extends('productLayout')

@section('menu')
@include('includes.secondaryMenu')
@endsection


@section('mainContent')
<article class="text-center my-5">
    <img alt="{{$product -> name}}" src="{{$product -> image}}" />
    <h1>{{ $product['name']}}</h1>
    <p>{{ $product['desc']}}</p>
</article>
@endsection