@extends('layouts.app')

@section('title-block')Страница продажи airpods
@endsection

@section('content')

    @foreach($product as $product)
        {{$product->name}}
    @endforeach

@endsection
